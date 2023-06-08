<?php

include '../inc/dbconfig.php';  //DB
include '../inc/member.php';    //Member class

$mem = new Member($db);

$id       = (isset($_POST['id'      ]) && $_POST['id'      ] != '') ? $_POST['id'      ] : '';
$email    = (isset($_POST['email'   ]) && $_POST['email'   ] != '') ? $_POST['email'   ] : '';
$zipcode  = (isset($_POST['zipcode' ]) && $_POST['zipcode' ] != '') ? $_POST['zipcode' ] : '';
$name     = (isset($_POST['name'    ]) && $_POST['name'    ] != '') ? $_POST['name'    ] : '';
$password = (isset($_POST['password']) && $_POST['password'] != '') ? $_POST['password'] : '';
$addr1    = (isset($_POST['addr1'   ]) && $_POST['addr1'   ] != '') ? $_POST['addr1'   ] : '';
$addr2    = (isset($_POST['addr2'   ]) && $_POST['addr2'   ] != '') ? $_POST['addr2'   ] : '';
$mode     = (isset($_POST['mode'    ]) && $_POST['mode'    ] != '') ? $_POST['mode'    ] : '';


  //이름 중복 체크
if($mode == 'id_chk') {

  if($id == '') {
    die(json_encode(['result' => 'empty_id']));
  }

  if($mem->id_exists($id)) {
    die(json_encode(['result' => 'fail']));
  } else {
    die(json_encode(['result' => 'success']));
  }
  //이메일 중복 체크
} else if($mode == 'email_chk') {

  if($email == '') {
    die(json_encode(['result' => 'empty_email']));
  }
  
  if($mem->email_exists($email)) {
    die(json_encode(['result' => 'fail']));
  } else {
    die(json_encode(['result' => 'success']));
  }
} else if($mode == 'input') {

  //이미지 처리
  $temparr = explode('.', $_FILES['photo']['name']);
  $ext = end($temparr);
  $photo = $id .'.'. $ext;

  copy($_FILES['photo']['tmp_name'], "../data/profile/".$photo);

  //DB에 보내줄 값
  $arr = [
    'id' => $id,
    'email' => $email,
    'name' => $name,
    'password' => $password,
    'zipcode' => $zipcode,
    'addr1' => $addr1,
    'addr2' => $addr2,
    'photo' => $photo
  ];

  $mem->input($arr);
}
