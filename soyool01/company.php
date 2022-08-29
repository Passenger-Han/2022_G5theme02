<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php
$co_id = "company";
$menuNum = "1";
$menuNum2 = "1";
$g5['title'] = "회사소개";
?>

<?php
include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
   $('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
   $('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
   });
</script>

<img src="<? G5_THEME_IMG_URL ?>/img1.jpg" alt="">

<ul class="slide">
    <li><img src="<? echo G5_THEME_IMG_URL ?>/bg01.jpg" alt=""></li>
    <li><img src="<? echo G5_THEME_IMG_URL ?>/bg02.jpg" alt=""></li>
</ul>
<script>
	$(".slide").bxSlider({
        pager: false,
        controls: false,
        auto: true,
        pause: 6000,
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');