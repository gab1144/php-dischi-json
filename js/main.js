const { createApp } = Vue;

createApp({
  data(){
    return{
      apiUrl: 'server.php',
      records: [],
      showInfo: false,
      selectedRecord: {}
    }
  },
  methods:{
    getRecords(){
      axios.get(this.apiUrl)
      .then(result => {
        this.records = result.data;
      })
    },
    selectRecord(index){
      this.selectedRecord = this.records[index];
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