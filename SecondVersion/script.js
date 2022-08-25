const app = new Vue({
    el: '#app',
    data: {
      discs: [],
      selectedGenre: "",
      genres: [],
      filteredDiscs: [],
    },

    methods: {
      getDiscs() {
         axios.get('http://localhost/php-ajax-dischi/SecondVersion/server.php')
         .then(result => {
            this.discs = result.data;
            console.log(this.discs);
            this.filteredDiscs = result.data;
            console.log(this.filteredDiscs);
            this.genres = this.getUniqueGenres(this.discs);
         })
      },

      getUniqueGenres(discs){
         const genres = [];
         discs.forEach(AlbumMusic => {
             if(!genres.includes(AlbumMusic.genre)){
                 genres.push(AlbumMusic.genre);
             }
         });
         return genres;
     },
   },

   created: function() {
      this.getDiscs();
   }

  })