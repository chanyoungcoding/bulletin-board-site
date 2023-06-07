<?php

include '../inc/dbconfig.php';
include '../inc/member.php';

$mem = new Member($db);

$id = $_POST['id'];

if($_POST['mode'] == 'id_chk') {

  if($mem->id_exists($id)) {

    die(json_encode(['result' => 'fail']));
    
  } else {

    die(json_encode(['result' => 'success']));

  }
}
