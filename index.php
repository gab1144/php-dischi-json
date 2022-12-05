<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <ul class="list-group list-group-flush border border-1 rounded">
      <li
      v-for="(record, index) in records" :key="index"
      class="list-group-item d-flex justify-content-between align-items-center">
        {{record.title}}
      </li>
    </ul>
  </div>
  <script src="./js/main.js"></script>
</body>
</html>