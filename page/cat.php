<?php

$g_title = 'Home';
$js_array = ['../js/home.js'];
$css_array = ['../css/intro1.css'];
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
    <a href="./dog.php"><div>강아지 연구소</div></a>
    <a href="./cat.php"><div>고양이 연구소</div></a>
    </div>
  </div>

  <!-- center -->
  <div class="main__center">
    <div class="center__img">
      <p>고양이 연구소에 <br/>오신것을 환영합니다.</p>
      <div class="center__input">
        <input class="form-control me-2" type="search" placeholder="회사가 궁금하다면 물어보세요!!" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">serch</button>
      </div>
    </div>
  </div>

  <!-- row -->
  <div class="center__row">
    <p>&#164;&nbsp;cat laboratory</p>
    <p>&#164;&nbsp;cat laboratory</p>
    <p>&#164;&nbsp;cat laboratory</p>
    <p>&#164;&nbsp;cat laboratory</p>
    <p>&#164;&nbsp;cat laboratory</p>
    <p>&#164;&nbsp;cat laboratory</p>
    <p>&#164;&nbsp;cat laboratory</p>
  </div>

  <!-- introduce -->
  <div class="home__intro">
    <div class="intro__intro">
      <p>저희는 고양이들의 습관과 행동들을 연구하여 기록하고 사람들에게</p>
      <p>알려주는 연구소입니다.</p>
    </div>
    <div class="intro__img">
      <div class="intro__img1">
        <i class="fa-solid fa-bone"></i>
      </div>
      <div class="intro__img2">
        <div class="img2__div1"><p>고양이 구출율</p></div>
        <div class="img2__div2"><p> 유기견을 3600마리 가량 구출</p></div>
      </div>
      <div class="intro__img3">
        <div><p>JOIN</p></div>
      </div>
      <div class="intro__img4">
        <p class="img4__first">고양이 입양</p>
        <p class="img4__second">키울 자격이 있는 견주분들에게 입양</p>
      </div>
      <div class="intro__img1">
        <i class="fa-solid fa-bone"></i>
      </div>
    </div>
  </div>


  <div class="home__message">
    <hr/>
    <div class="message__consumer">
      <p>고양이 연구소는 무엇을 하는 곳인가요?</p>
    </div>
    <div class="message__owner">
      <p>고양이를 연구하고 기록하여 사람들에게 지식을 전하기 위하여 설립되었습니다.</p>
    </div>
    <div class="message__consumer">
      <p>저희가 얻을 수 있는건 무엇일까요?</p>
    </div>
    <div class="message__owner">
      <p>고양이에 대한 행동, 생각등을 이해 할 수 있게 됩니다.</p>
    </div>
  </div>

<?php
include 'inc_footer.php';
?>