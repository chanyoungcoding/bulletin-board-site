<?php

session_start();

$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';
$ses_level = (isset($_SESSION['ses_level']) && $_SESSION['ses_level'] != '') ? $_SESSION['ses_level'] : '';

$g_title = 'Home';
$js_array = ['js/main.js'];
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
                <img src="./img/cat1.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                고양이 입술 붓거나 염증이 생겼다면 대처 방법
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/cat2.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                개냥이 , 냥아치와의 차이점은 어떤 것이 있을까?
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/cat3.jpeg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                고양이 똥냄새가 지독한 이유 8 가지
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/cat4.png" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                고양이 구토증상, 원인과 대처 방법은?
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/cat5.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                고양이 분리불안 증상 및 대처 방법
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
                <img src="./img/mango.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                강아지 망고 먹어도 되나요?
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/dog2.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                강아지가 피곤할때 해결법
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/dog3.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                강아지 비행 탑승 전 꼭 확인해야 절차
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/dog4.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                강아지가 천둥 번개 소리를 무서워 하는 이유는?
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="javascript:void(0)">
              <div>
                <img src="./img/dog5.jpg" alt="이미지 입니다.">
              </div>
              <div class="img__intro">
                유기견 봉사 신청 방법과 종류, 준비물 알아보기
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 새로 나온 컨텐츠 -->

  <div class="home__new">
    <p>새로 나온 컨텐츠</p>
    <div class="new__container">
      <a href="javascript:void(0)">
        <div class="new__left">
          <div class="new__intro">
            <p>강아지 눈물과 눈물자국의 원인</p>
          </div>
        </div>
      </a>
      <div class="new__right">
        <a href="javascript:void(0)">
          <div class="right__1">
            <div class="right__img"></div>
            <div class="right__text">
              <p class="rg__text1">강아지의 쿨나시 추천 제품 10가지</p>
              <p class="rg__text2">강아지들도 더위를 타는것을 알고있는 사람은 거의 없습니다. 따라서 이번 기회에... </p>
            </div>
          </div>
        </a>

        <a href="javascript:void(0)">
          <div class="right__2">
            <div class="right__img2"></div>
            <div class="right__text">
              <p class="rg__text1">반려동물 재난 대처, 알고있나요?</p>
              <p class="rg__text2">재난이 가장 무서운 이유는 언제, 어디서 일어날지 모르기 때문입니다. 이러한 갑작스러운 상황에서... </p>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>

  <!-- 백과 사전 -->
  <div class="home__information">
    <p class="inf__header">지식 정보 시리즈</p>
    <div class="inf__book">
      <a href="javascript:void(0)">
        <div class="book__1"></div>
        <p>세상에 모든 강아지 사료 리뷰</p>
      </a>
      <a href="javascript:void(0)">
        <div class="book__2"></div>
        <p>강아지 사료 유목민을 위한 가이드</p>
      </a>
      <a href="javascript:void(0)">
        <div class="book__3"></div>
        <p>쉽게 알려주는 고양이 질병 사전</p>
      </a>
      <a href="javascript:void(0)">
        <div class="book__4"></div>
        <p>쉽게 알려주는 강아지 질병 사전</p>
      </a>
    </div>
  </div>

</main>

<?php
include 'inc_footer.php';
?>