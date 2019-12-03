let app = new Vue({
	el: "#app",
	data: {
		hdep: 0,
		temps: tps2str(0),
		etat: "P", // P=pret, F=en fonction, A=arret
		laps: []
	},
	methods: {
		startChrono() {
			this.etat = "F";
			this.hdep = new Date();
			this.timer = setInterval(this.majTemps, 1);
		},
		stopChrono() {
			this.etat = "A";
			clearInterval(this.timer);
		},
		resetChrono() {
			this.etat = "P";
			this.temps = tps2str(0);
			this.laps = [];
		},
		addLapTime() {
			this.laps.push(this.temps);
		},
		majTemps() {
			this.temps = tps2str(new Date() - this.hdep);
		}
	}
});

function tps2str(tps_ms) {
	let tps = new Date(tps_ms);

	let heures = tps
		.getUTCHours()
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
