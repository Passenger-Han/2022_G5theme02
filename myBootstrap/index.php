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
    <div class="visual position-relative">
        <video src="<?php echo G5_THEME_IMG_URL ?>/visual01.mp4" class="position-absolute" autoplay muted loop></video>
    </div>
</div>

<div id="section-1st" class="container">
    <div class="row pt-5">
        <div class="col col-md-7 d-flex justify-content-center position-relative">
            <img class="" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01.png" alt="">
            <img class="position-absolute start-50 top-0 translate-middle-x" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_dice.png" alt="">
            <img class="position-absolute end-0 bottom-0" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_aunt.png" alt="">
            <div class="car position-absolute d-flex flex-column align-items-center">
                <img class="w-50" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_car.gif" alt="">
                <img src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_carDesc.png" alt="">
            </div>
        </div>
        <div class="col col-md-5 d-flex flex-column justify-content-center">
            <h2 class="fw-bolder fs-1 mb-4">YBM 레몬만의<br>전용뷰어로 수업</h2>
            <p class="fs-5">화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>YBM교육이 개발한 <span class="fw-bold text-success">화상수업 전용 뷰어</span>입니다.</p>
        </div>
    </div>
</div>

<div id="section-2nd" class="container">
    <div class="wrapper py-5">
        <div class="row p-5">
            <div class="text col col-md-6 d-flex flex-column justify-content-center ps-4">
                <h2 class="fw-bolder fs-1 mb-4">화상수업을 위해 개발된<br>e-Classbook</h2>
                <p class="fs-5">오프라인 교재를 그대로 올려서 수업하지 않습니다.<br> 온라인 수업에 맞춰 개발된 <span class="fw-bold text-success">온라인 전용 e-Classbook</span>입니다.</p>
            </div>
            <div class="image col col-md-6 p-5 ps-0">
                <img src="<?php echo G5_THEME_IMG_URL ?>/section_2nd_visual01.png" alt="">
            </div>
        </div>
    </div>
</div>

<div id="section-3rd" class="container">
    <div class="row">
        <div class="image col col-md-6">
            <div class="position-relative">
                <img src="<?php echo G5_THEME_IMG_URL ?>/section_3rd_visual01.png" alt="">
                <img class="position-absolute" src="<?php echo G5_THEME_IMG_URL ?>/section_3rd_visual01_dartboard.png" alt="">
            </div>
        </div>
        <div class="text col col-md-6"></div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');