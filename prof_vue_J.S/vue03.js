let app = new Vue({
	el: "#app",
	data: {
		hDebut: tps2str(new Date()),
		maintenant: "",
		laps: []
	},
	methods: {
		majHeure() {
			console.log("maj heure");

			this.maintenant = tps2str(new Date());
		},
		addLapTime() {
			this.laps.push(this.maintenant);
		}
	},
	mounted() {
		this.timer = setInterval(this.majHeure, 100);
	},
	destroyed() {
		clearInterval(this.timer);
	}
});

function tps2str(tps_ms) {
	let tps = new Date(tps_ms);

	let heures = tps
		.getHours()
		.toString()
		.padStart(2, "0");
	let minutes = tps
		.getMinutes()
		.toString()
		.padStart(2, "0");
	let secondes = tps
		.getSeconds()
		.toString()
		.padStart(2, "0");
	let millisecondes = tps
		.getMilliseconds()
		.toString()
		.padStart(3, "0");

	return `${heures}:${minutes}:${secondes}.${millisecondes}`;
}
