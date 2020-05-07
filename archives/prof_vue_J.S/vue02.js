let app = new Vue({
	el: "#app",
	data: {
		nom: "",
		prenom: ""
	},
	methods: {
		salutBouton() {
			console.log("Hello, je suis le bouton");
		},
		auRevoirBouton() {
			console.log("Au revoir du bouton");
		},
		salutDiv() {
			console.log("Hello, je suis le div");
		},
		nomComplet() {
			return this.prenom + " " + this.nom;
		}
	}
});
