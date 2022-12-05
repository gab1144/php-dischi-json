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
    <header>
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/1200px-Spotify_logo_without_text.svg.png" alt="Spotify logo">

      <select @change="getRecords()" v-model="genreSelected">
          <option value="null">{{firstOption}}</option>
          <option v-for="(genre, index) of musicGenres" :key="index" :value="genre">{{genre}}</option>
        </select>

    </header>

    <div class="container">
      
      <div>
        
      </div>
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
  </div>
  <script src="./js/main.js"></script>
</body>
</html>