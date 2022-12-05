<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <title>Document</title>
</head>
<body>
  <div id="app">
    <div class="container">
      <h1>Dischi</h1>

        <div class="record-area">
          <div class="record-card"
          v-for="(record, index) in records" :key="index"
          @click="selectRecord(index)">
            <img :src="record.poster" :alt="record.title">
            <h3>{{record.title}}</h3>
            <span class="author">{{record.author}}</span>
            <span class="year">{{record.year}}</span>
          </div>
        </div>
    </div>
    <div class="info-record" v-show="showInfo === true">
      <button @click="closeInfo()" class="close-info"><i class="fa-solid fa-xmark"></i></button>

      <div class="img-info">
        <img :src="selectedRecord.poster" :alt="selectedRecord.title">
      </div>
      
      <h3>{{selectedRecord.title}}</h3>
      
      <span class="author">{{selectedRecord.author}}</span>
      
      <span class="year">{{selectedRecord.year}}</span>

    </div>
  </div>
  <script src="./js/main.js"></script>
</body>
</html>