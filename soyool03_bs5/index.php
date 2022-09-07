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
    <?php
        $list_count = (is_array($list) && $list) ? count($list) : 0;
        if ($list_count > 3) $list_count = 3;
    ?>
    
    <?php for ($i = 0; $i < $list_count; $i++) { ?>
        <li class="swiper-slide">
            <?php
                if ($list[$i]['icon_secret']) echo "<span class=\"lock_icon\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span> ";
                if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
        
                echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\">";
                if ($list[$i]['is_notice'])
                    echo "<strong>".$list[$i]['subject']."</strong>";
                else
                    echo $list[$i]['subject'];
        
                if ($list[$i]['comment_cnt'])
                    echo $list[$i]['comment_cnt'];
                echo "</a>";
            ?>
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');