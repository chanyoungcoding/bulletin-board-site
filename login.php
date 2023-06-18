<?php

$js_array = ['js/login.js'];
$css_array = ['./css/signup.css'];
$menu_code = 'login';
$g_title = '로그인';
include 'inc_header.php';
?>

<main class="login__main">
  <div class="login__inner">
    <form method="post" action="" class="login__form">
      <input type="text" placeholder="아이디" id="f_id" class="login__username">
      <input type="password" placeholder="비밀번호" id="f_pw" class="login__password">
      <input type="button" id="btn_login" value="로그인" class="login__button">
    </form>
  </div>
</main>
