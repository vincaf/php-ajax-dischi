const app = new Vue({
    el: '#app',
    data: {
      discs: [],
    },

    methods: {
      getDiscs() {
         axios.get('http://localhost/php-ajax-dischi/SecondVersion/server.php')
         .then(result => {
            this.discs = result.data;
            console.log(this.discs);
         })
      }
   },
   created: function() {
      this.getDiscs();
   }

  })