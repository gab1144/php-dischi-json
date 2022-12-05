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

if(isset($_POST['title'])){
  $newrRecord = [
    'title' => $_POST['Title'],
    'author'=>$_POST['author'],
    'year'=>$_POST['year'],
    'poster'=>$_POST['poster'],
    'genre'=>$_POST['genre']
  ];

  $list[] = $newrRecord;

  file_put_contents('dischi.json', json_encode($list));
}

if(isset($_POST['deleteRecord'])){

  array_splice($list,$_POST['deleteRecord'],1);

  file_put_contents('dischi.json', json_encode($list));
}

header('Content-Type: application/json');
echo json_encode($list);