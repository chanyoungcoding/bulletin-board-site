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
  <div class="swiper-container" id="my-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">1</div>
      <div class="swiper-slide">2</div>
      <div class="swiper-slide">3</div>
      <div class="swiper-slide">4</div>
      <div class="swiper-slide">5</div>
    </div>
  </div>
</main>

<?php
include 'inc_footer.php';
?>