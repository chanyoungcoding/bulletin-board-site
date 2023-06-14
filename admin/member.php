<?php

$g_title = 'Home';
$js_array = ['js/home.js'];
$menu_code = 'member';

include 'inc_common.php';
include 'inc_header.php';
include '../inc/dbconfig.php'
?>

<main class="w-75 mx-auto border rounded-5 p-5" style="height: calc(100vh - 257px)">
  <div class="container">
    <h3>회원관리</h3>
  </div>

  <table class="table table-border">
    <tr>
      <th>번호</th>
      <th>아이디</th>
      <th>이름</th>
      <th>이메일</th>
      <th>등록일시</th>
      <th>관리</th>
    </tr>
    <tr>
      <td>번호</td>
      <td>아이디</td>
      <td>이름</td>
      <td>이메일</td>
      <td>등록일시</td>
      <td>관리</td>
    </tr>
    <tr>
      <td>번호</td>
      <td>아이디</td>
      <td>이름</td>
      <td>이메일</td>
      <td>등록일시</td>
      <td>관리</td>
    </tr>
    <tr>
      <td>번호</td>
      <td>아이디</td>
      <td>이름</td>
      <td>이메일</td>
      <td>등록일시</td>
      <td>관리</td>
    </tr>
    <tr>
      <td>번호</td>
      <td>아이디</td>
      <td>이름</td>
      <td>이메일</td>
      <td>등록일시</td>
      <td>관리</td>
    </tr>
  </table>
</main>


<?php
include 'inc_footer.php';
?>