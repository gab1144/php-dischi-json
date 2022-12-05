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
        "Pop",
        "Rock",
        "Jazz",
        "Metal"
      ],
      firstOption: "All genres"
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
    }
  },
  mounted(){
    this.getRecords();
  }
}).mount('#app');