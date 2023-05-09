<?php

// var_dump($_POST);
if (isset($_POST['new_task'])) {
  $task = [
    "text" => $_POST['new_task'],
    "done" => false
  ];

  // Legge il file json con file_get_contents
  $tasks_string = file_get_contents('tasks.json');

  // Converte la stringa json in un array associativo con json_decode() 
  $tasks_array = json_decode($tasks_string, true);
  // var_dump($tasks_array);

  // Aggiunge la nuova task all' array
  array_push($tasks_array, $task);
  // var_dump($tasks_array);

  // Converte l' array in json
  $new_tasks_json_string = json_encode($tasks_array);

  // Sostituisce il contenuto del file usando file_put_contents()
  file_put_contents('tasks.json', $new_tasks_json_string);

  // Aggiunge header application/json
  header('Content-Type: application/json');

  // Stampa il json
  echo $new_tasks_json_string;
}
