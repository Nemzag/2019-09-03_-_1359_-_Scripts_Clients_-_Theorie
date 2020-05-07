let app = new Vue({
	el: "#app",
	data: {
		listePays: [],
		paysChoisis: [], //v-model lié avec les cases à cocher pays
		listePers: [],
		idPSel: 0, //v-model lié avec le select des personnes
		etat: "" //gestion des états: "" -> "etatChoixPays" -> "etatInscription"
	},
	mounted() {
		this.etatChoixPaysEntry(); //passage à l'état suivant
	},
	methods: {
		// ------------------------------------------
		// gestion des états
		// ------------------------------------------
		etatChoixPaysEntry() {
			// init de la liste des pays
			this.listePays = [];

			fetch("./listePays.php") //requête : liste des pays
				.then(rep => rep.json())
				.then(liste => {
					// ajout à la liste des pays
					for (let pays of liste) this.listePays.push(pays.paysP);

					// quand la liste est chargée (Promise)
					this.listePays.sort((a, b) => a.localeCompare(b)); // tri par ordre alphabétique
					this.etat = "etatChoixPays"; //passage à l'état suivant
				});
		},
		commenceInscr() {
			if (!this.etatChoixPays || this.nbPaysChoisis == 0) return;
			this.etatInscriptionEntry();
		},
		// ---------------------------
		etatInscriptionEntry() {
			// init de la liste des personnes
			this.listePers = [];

			// gestion des Promise
			let promesses = [];

			this.paysChoisis.forEach(pays => {
				//pour chaque pays coché
				let promesse = fetch("./listePersUnPays.php?pays=" + pays) //requête : liste des personnes
					.then(rep => rep.json())
					.then(liste => {
						// ajout à la liste des personnes
						for (let pers of liste) {
							pers.selectionne = false; // attribut supplémentaire
							this.listePers.push(pers);
						}
					});
				promesses.push(promesse);
			});

			// le travail continuera lorsque tous les pays seront traités
			Promise.all(promesses).then(() => {
				this.listePers.sort((a, b) =>
					(a.nomP + a.prenomP).localeCompare(b.nomP + b.prenomP)
				); // tri sur le nom et le prénom
				this.etat = "etatInscription"; //passage à l'état suivant
			});
		},
		ajouter() {
			if (!this.etatInscription) return;
			let p = this.listePers.find(el => el.idP === this.idPSel);
			p.selectionne = true;
		},
		supprimer(ev) {
			if (!this.etatInscription) return;
			let idx = ev.target.value;
			let p = this.listePers.find(el => el.idP == idx);
			p.selectionne = false;
		}
		// ------------------------------------------
	},
	computed: {
		// ------------------------------------------
		// gestion des états
		// ------------------------------------------
		etatChoixPays() {
			return this.etat === "etatChoixPays";
		},
		etatInscription() {
			return this.etat === "etatInscription";
		},
		// ------------------------------------------
		nbPaysChoisis() {
			return this.paysChoisis.length;
		},
		persChoisies() {
			// liste des personnes sélectionnées
			return this.listePers.filter(el => el.selectionne);
		},
		masseTotale() {
			// calcul du total des masses des personnes sélectionnées
			return this.persChoisies.reduce((a, e) => a + Number(e.masseP), 0);
		}
	}
});
