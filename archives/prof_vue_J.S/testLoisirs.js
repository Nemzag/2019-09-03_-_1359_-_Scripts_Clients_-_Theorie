let app = new Vue({
	el: "#app",
	data: {
		age: 0,
		loisirs: [],
		loisirsChoisis: []
	},
	methods: {
		envoyer() {
			if (this.nbLoisirsOK) {
				console.log("ok");
			} else {
				console.log("pas ok");
			}
		}
	},
	computed: {
		loisirsAccessibles() {
			this.loisirsChoisis = [];
			return this.loisirs.filter(el => Number(el.ageMin) < Number(this.age));
		},
		nbLoisirsChoisis() {
			return this.loisirsChoisis.length;
		},
		nbLoisirsOK() {
			return this.nbLoisirsChoisis > 0 && this.nbLoisirsChoisis <= 2;
		}
	},
	mounted() {
		fetch("csv_to_json.php?csv_file=loisirs.csv")
			.then(rep => rep.json())
			.then(lst => (this.loisirs = lst));
	}
});
