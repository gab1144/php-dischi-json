const { createApp } = Vue;

createApp({
  data(){
    return{
      apiUrl: 'server.php',
      records: []
    }
  },
  methods:{
    getRecords(){
      axios.get(this.apiUrl)
      .then(result => {
        this.records = result.data;
      })
    },
  },
  mounted(){
    this.getRecords();
  }
}).mount('#app');