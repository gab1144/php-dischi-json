<?php

$string = file_get_contents('dischi.json');

$list = json_decode($string, true);

if(isset($_GET['genre'])){

  $list = array_filter($list, function($value) {
    return $value['genre'] == $_GET['genre'];
  });
}

if(isset($_GET['id'])){
  $list = $list[$_GET['id']];
}

header('Content-Type: application/json');
echo json_encode($list);