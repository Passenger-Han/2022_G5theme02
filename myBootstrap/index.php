<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="container-fluid p-0" id="mainpage-visual">
    <div class="visual d-flex align-items-center position-relative">
        <video src="<?php echo G5_THEME_IMG_URL ?>/visual01.mp4" class="position-absolute" autoplay muted loop></video>
    </div>
</div>

<div class="container" style="background-color: brown;">
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');