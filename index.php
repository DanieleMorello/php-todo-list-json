<!doctype html>
<html lang='it'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>PHP ToDo List JSON</title>
  <!-- Bootstrap C -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Mio CSS -->
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div id='app'>
    <div class="container">
      <h1 class="text-center mt-5 text-white-50">Todo List</h1>

      <div class="card my-5">
        <ul class="list-group list-group-flush">
          <li v-for="task in tasks" class="px-5 py-3 d-flex justify-content-between align-items-center list-group-item">
            <span :class="{ 'text-decoration-line-through': task.done }">
              {{ task.text }}
            </span>
            <span class="delete text-danger">
              <i class="fa-solid fa-trash-can"></i>
            </span>

          </li>
        </ul>
      </div>

      <div class="input-group mt-3">
        <input type="text" class="form-control" v-model="new_task" @keyup.enter="add_task"
          placeholder="Inserisci elemento...">
        <span class="input-group-text text-warning text-bg-primary" @click="add_task()">
          Inserisci
        </span>
      </div>
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