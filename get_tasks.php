<?php

$tasks_jeson_string = file_get_contents('tasks.json');

header('content-Type: application/json');

echo $tasks_jeson_string;
