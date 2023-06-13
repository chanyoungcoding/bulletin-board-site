<?php

session_start();

$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';

$g_title = 'Home';
$js_array = ['js/home.js'];
$css_array = ['./css/home.css'];
$menu_code = '';
include 'inc_header.php';
?>
<main class="home__main">

  <!-- 메인 헤더 부분 -->
  <div class="home__header">
    <div class="header__preface">
      <i class="fa-solid fa-bone"></i>
    </div>
    
    <div class="header__animal">
    <a href="javascript:void(0)"><div>강아지 연구소</div></a>
    <a href="javascript:void(0)"><div>고양이 연구소</div></a>
    </div>
  </div>

  <!-- 메인 중앙 부분 -->
  <div class="home__center">
    <div class="center__informationName">
      <div><p>인기 지식 정보</p></div>
    </div>

    <p class="cat">고양이</p>
    <div class="center__intro">
      <div class="swiper-container" id="my-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <p class="dog">강아지</p>
    <div class="center__intro">
      <div class="swiper-container" id="my-swiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/example.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                가나다라마바사아자차카파타하가나다라마바사
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


</main>

<?php
include 'inc_footer.php';
?>