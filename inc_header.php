<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $g_title ?></title>
  <!-- 부트스트랩 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- font awasome -->
  <script src="https://kit.fontawesome.com/9c16dfcaa4.js" crossorigin="anonymous"></script>

  <!-- swiper  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <link rel=stylesheet href='./css/signin.css' type='text/css'>
  <?php
    if(isset($css_array)) {
      foreach($css_array as $var) {
        echo "<link rel='stylesheet' href='$var' type='text/css'/>".PHP_EOL;
      }
    }
  ?>
  <?php
    if(isset($js_array)) {
      foreach($js_array as $var) {
        echo "<script defer src='$var'></script>".PHP_EOL;
      }
    }
  ?>
</head>
<body>
  <div class="container">

    <!-- header -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4"><i class="fa-solid fa-paw"></i>&nbsp;동물학교</span>
      </a>

      <ul class="nav nav-pills">
        <?php if(isset($ses_id) && $ses_id != '') { ?>

        <li class="nav-item"><a href="index.php" class="nav-link <?= ($menu_code == '') ? 'active' : '' ?>" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="company.php" class="nav-link <?= ($menu_code == 'company') ? 'active' : '' ?>">회사소개</a></li>
        <?php if($ses_level == 10) { ?>
          <li class="nav-item"><a href="./admin/member.php" class="nav-link <?= ($menu_code == 'member') ? 'active' : '' ?>">관리자페이지</a></li>
        <?php } else { ?>
          <li class="nav-item"><a href="mypage.php" class="nav-link <?= ($menu_code == 'member') ? 'active' : '' ?>">마이페이지</a></li>
        <?php } ?>
        <li class="nav-item"><a href="board.php" class="nav-link <?= ($menu_code == 'board') ? 'active' : '' ?>">게시판</a></li>
        <li class="nav-item"><a href="./pg/logout.php" class="nav-link <?= ($menu_code == 'login') ? 'active' : '' ?>">로그아웃</a></li>

        <?php } else { ?>

        <li class="nav-item"><a href="index.php" class="nav-link <?= ($menu_code == '') ? 'active' : '' ?>" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="company.php" class="nav-link <?= ($menu_code == 'company') ? 'active' : '' ?>">회사소개</a></li>
        <li class="nav-item"><a href="stipulation.php" class="nav-link <?= ($menu_code == 'member') ? 'active' : '' ?>">회원가입</a></li>
        <li class="nav-item"><a href="board.php" class="nav-link <?= ($menu_code == 'board') ? 'active' : '' ?>">게시판</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link <?= ($menu_code == 'login') ? 'active' : '' ?>">로그인</a></li>

        <?php } ?>
      </ul>
    </header>