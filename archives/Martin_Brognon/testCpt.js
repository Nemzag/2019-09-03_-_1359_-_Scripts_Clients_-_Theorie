Vue.component("boutonCptSec", {
    data: function() {
        return {
            hDep: 0, // Heure de départ
            time: 0,
            timer: null
        };
    },
    mounted() {
        this.hDep = Date.now();
        this.timer = setInterval(this.majHeure, 500);
    },
    methods: {
        majHeure() {
            this.time = this.tpsEnSec();
        }
    },
    computed: {
        tpsEnSec() {
            return Math.floor((Date.now() - this.hDep) / 1000);
        }
    },
    template: `<button>{{ time }}</button>`
});

let app = new Vue({
    el: "#app",
    data: {
        client: "",
        clients: []
    },
    methods: {
        ajout() {
            this.clients.push(this.client);
            this.client = "";
        }
    }
});