<?php

session_start();

$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';
$ses_level = (isset($_SESSION['ses_level']) && $_SESSION['ses_level'] != '') ? $_SESSION['ses_level'] : '';

$g_title = 'Home';
$js_array = ['../js/home.js'];
$css_array = ['../css/intro.css'];
$menu_code = '';
include 'inc_header.php';
?>

<main class="home__main">
  <p>hello</p>
</main>