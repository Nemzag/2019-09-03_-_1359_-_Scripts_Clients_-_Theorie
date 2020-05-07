Vue.component("monHorloge", {
	data: function() {
		return {
			time: 0,
			timer: null,
			enFct: false
		};
	},
	mounted() {
		this.startStop();
		//this.timer = setInterval(this.majHeure, 1);
	},
	methods: {
		majHeure() {
			this.time = Date.now();
		},
		startStop() {
			if (this.enFct) {
				clearInterval(this.timer);
				this.enFct = false;
			} else {
				this.timer = setInterval(this.majHeure, 1);
				this.enFct = true;
			}
		}
	},
	template: `<span @click="startStop">{{ time }}</span>`
});

let app = new Vue({
	el: "#app",
	data: {
		horloges: []
	},
	methods: {
		ajout() {
			this.horloges.push(Date.now());
		}
	}
});
