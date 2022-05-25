const app = new Vue({
    'el': '#app',
    data: {
        albums: [],
        genres: [],
        selectedGenre: '',
        apiPath: './server.php'
    },
    methods: {
        search() {
            this.getData(this.selectedGenre)
        },
        getData(genre = null) {
            let path = this.apiPath;
            if (genre) {
                path = `${this.apiPath}?genre=${genre}`;
            }
            axios.get(path).then((res) => {
                this.albums = res.data;
                if(this.genres.length < 1){
                this.albums.forEach(album => {
                    if (!this.genres.includes(album.genre)) {
                    this.genres.push(album.genre)
                }  
            });
            }
            })  
        } 
    },
    mounted() {
       this.getData()
    },
})
