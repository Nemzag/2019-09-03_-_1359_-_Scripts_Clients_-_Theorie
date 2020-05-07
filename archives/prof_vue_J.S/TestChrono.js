let chrono = Vue.component("monChrono", {
	data: function() {
		return {
			temps: tps2hms(0, 1),
			tempsDep: 0,
			etat: "ready",
			timer: null
		};
	},
	methods: {
		startStop() {
			switch (this.etat) {
				case "ready":
					this.tempsDep = Date.now();
					this.timer = setInterval(this.majTemps, 1);
					this.etat = "running";
					break;
				case "running":
					clearInterval(this.timer);
					this.etat = "stopped";
					break;
				case "stopped":
					this.temps = tps2hms(0, 1);
					this.etat = "ready";
					break;
			}
		},
		majTemps() {
			this.temps = tps2hms(Date.now() - this.tempsDep, 1);
		}
	},
	template: `<button @click="startStop()">{{temps}}</button>`
});

let app = new Vue({
	el: "#app",
	data: {
		personnes: ["Dubois", "Leroy", "Legrand"]
	}
});

function tps2hms(time_ms, precision = 3) {
	time_ms =
		Math.round(time_ms / Math.pow(10, 3 - precision)) *
		Math.pow(10, 3 - precision);
	let tps = new Date(time_ms);
	let hh = tps
		.getUTCHours()
		.toString()
		.padStart(2, "0");
	let mm = tps
		.getMinutes()
		.toString()
		.padStart(2, "0");
	let ss = tps
		.getSeconds()
		.toString()
		.padStart(2, "0");
	let ms = tps
		.getMilliseconds()
		.toString()
		.padStart(precision, "0")
		.slice(0, precision);
	return `${hh}:${mm}:${ss}${precision > 0 ? `.${ms}` : ""}`;
}
