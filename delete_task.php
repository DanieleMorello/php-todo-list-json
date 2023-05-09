<?php

// var_dump($_POST);
if (isset($_POST['index'])) {
  // Assegna il valore del parametro della funzione a una variabile
  $index = intval($_POST['index']);

  // Legge il file json con file_get_contents
  $tasks_string = file_get_contents('tasks.json');

  // Converte la stringa json in un array associativo con json_decode() 
  $tasks_array = json_decode($tasks_string, true);
  // var_dump($tasks_array);

  // Rimuove la nuova task all' array
  array_splice($tasks_array, $index, 1);
  // var_dump($tasks_array);

  // Converte l' array in json
  $new_tasks_json_string = json_encode($tasks_array);

  // Sostituisce il contenuto del file usando file_put_contents()
  file_put_contents('tasks.json', $new_tasks_json_string);

  // Invia un oggetto FormData() tramite axios
  header('Content-Type: application/json');

  // Stampa il json
  echo $new_tasks_json_string;
}
