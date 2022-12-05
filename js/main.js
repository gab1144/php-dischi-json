const { createApp } = Vue;

createApp({
  data(){
    return{
      apiUrl: 'server.php',
      records: [],
      showInfo: false,
      selectedRecord: {},
      genreSelected: null,
      musicGenres: [
        null,
        "Pop",
        "Rock",
        "Jazz",
        "Metal"
      ],
      firstOption: "All genres",
      newTitle: "",
      newAuthor: "",
      newYear: "",
      newPoster: "",
      newGenre: ""
    }
  },
  methods:{
    getRecords(){
      const params = {
        genre: this.genreSelected,
        id: this.selectedIndex
      }  
      axios.get(this.apiUrl, {params})
      .then(result => {
        this.records = result.data;
      })
    },
    selectRecord(index){
      const params = {
        id: index
      }  
      axios.get(this.apiUrl, {params})
      .then(result => {
        this.selectedRecord = result.data;
      })
      this.showInfo = true;
    },
    closeInfo(){
      this.showInfo= false;
    },
    addRecord(){
      // preparo la chiave->valore da inviare in POST
      const data = {
        title: this.newTitle,
        author: this.newAuthor,
        year: this.newYear,
        poster: this.newPoster,
        genre: this.newGenre
      }

      axios.post(this.apiUrl, data, {
        // non usando new FormData devo passare questo oggetto alla chiamata
        headers: {'Content-Type': 'multipart/form-data'}
      })
        .then(result => {
          this.newTitle = "";
          this.newAuthor = "";
          this.newYear = "";
          this.newPoster = "";
          this.newGenre = "";
          this.records = result.data;
        })

    },
  },
  mounted(){
    this.getRecords();
  }
}).mount('#app');