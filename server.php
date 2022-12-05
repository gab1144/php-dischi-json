<?php

$string = file_get_contents('dischi.json');

$list = json_decode($string, true);

if(($_GET['genre']!= "")){
  $list = array_filter($list, function($value) {
    return $value['genre'] == $_GET['genre'];
  });
}

header('Content-Type: application/json');
echo json_encode($list);