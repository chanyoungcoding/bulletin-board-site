<?php

$g_title = 'Home';
$js_array = ['../js/home.js'];
$css_array = ['../css/intro.css'];
$menu_code = '';
include 'inc_header.php';
?>

<main class="home__main">
  <!-- header -->
  <div class="home__header">
    <div class="header__preface">
      <i class="fa-solid fa-bone"></i>
    </div>
    
    <div class="header__animal">
    <a href="javascript:void(0)"><div>강아지 연구소</div></a>
    <a href="javascript:void(0)"><div>고양이 연구소</div></a>
    </div>
  </div>

  <!-- center -->
  <div class="main__center">
    <div class="center__img">
      <p>강아지 연구소에 <br/>오신것을 환영합니다.</p>
      <div class="center__input">
        <input class="form-control me-2" type="search" placeholder="회사가 궁금하다면 물어보세요!!" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">serch</button>
      </div>
    </div>
  </div>

  <!-- row -->
  <div class="center__row">
    <p>&#164;&nbsp;dog laboratory</p>
    <p>&#164;&nbsp;dog laboratory</p>
    <p>&#164;&nbsp;dog laboratory</p>
    <p>&#164;&nbsp;dog laboratory</p>
    <p>&#164;&nbsp;dog laboratory</p>
    <p>&#164;&nbsp;dog laboratory</p>
    <p>&#164;&nbsp;dog laboratory</p>
  </div>

  <!-- introduce -->
  <div class="home__intro">
    <div class="intro__intro">
      <p>강아지 연구소에 오신것을 <span>환영</span>합니다.</p>
      <p>저희는 강아지들의 습관과 행동들을 연구하여 기록하고 사람들에게</p>
      <p>알려주는 연구소입니다.</p>
    </div>
    <div class="intro__img">
      <div class="intro__img1">
        <i class="fa-solid fa-bone"></i>
      </div>
      <div class="intro__img2">
        <div class="img2__div1"><p>강아지 구출율</p></div>
        <div class="img2__div2"><p> 유기견을 3600마리 가량 구출</p></div>
      </div>
      <div class="intro__img3"></div>
      <div class="intro__img4"></div>
      <div class="intro__img5"></div>
    </div>
  </div>

</main>