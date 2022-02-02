const app = new Vue({
    el: "#app",
    data: {
        choosedGenre: "All",
        disks: null,
    },
    methods: {
        getAxiosCall () {
            axios({
                method: 'get',
                url: 'http://localhost/server/controller-api.php',
                params: {genre: this.choosedGenre}
              })
                .then((response) => {
                    this.disks = response.data.response; 
                });
        }
    },
    created() {
        axios({
            method: 'get',
            url: 'http://localhost/server/controller-api.php',
          })
            .then((response) => {
                this.disks = response.data.response; 
            });
    }
});