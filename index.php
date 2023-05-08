<!doctype html>
<html lang='it'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>PHP ToDo List JSON</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div id='app'>
    <h1>Todo List</h1>
    <div class="card">
      <ul>
        <li v-for="task in tasks"> {{ task }}</li>
      </ul>
    </div>

  </div>

  <!-- AXIOS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js"
    integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- BOOTSTRAP CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
  <!-- VUE JS -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <!-- APP JS  -->
  <script src='./app.js'></script>

</body>

</html>