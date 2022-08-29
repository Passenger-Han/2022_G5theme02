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

<div id="mainpage-swiper" class="swiper">
    <div class="swiper-wrapper">
        <script>
            let texts = '';
            for (let i = 0; i < DATA_MAINPAGE_SWIPER.length; i++){

            }
            document.querySelector("#mainpage-swiper.swiper .swiper-wrapper").innerHTML = texts;

            const mainpage_swiper = new Swiper("#mainpage-swiper.swiper", {
                loop: true,
            });
        </script>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');