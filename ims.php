<?php

include './inc/dbconfig.php';
include './inc/member.php';

//아이디 중복 테스트

$email = 'white1614@naver.com';

$mem  = new Member($db);

if ($mem->email_exists($email)) {
  echo "아이디가 중복됩니다.";
} else {
  echo "사용할수 있는 이메일 입니다.";
}

?>