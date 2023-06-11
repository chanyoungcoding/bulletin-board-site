<?php

session_start();

$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';

$g_title = 'Home';
$js_array = ['js/home.js'];
$menu_code = '';
include 'inc_header.php';
?>

<?php 
echo '<div>
<h1>Home 입니다.</h1>
</div>'
?>

<?php
include 'inc_footer.php';
?>