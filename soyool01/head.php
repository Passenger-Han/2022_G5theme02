<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/logo.svg" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <ul id="gnb_1dul">
                <li class="gnb_1dli gnb_mnal"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button></li>
                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? '' : '';
                    // $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>
                <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>

    
        <ul class="hd_login">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>

        </ul>
    </div>
    
    <nav id="gnb">
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">
            <div id="gnb_all">
                <h2>전체메뉴</h2>
                <ul class="gnb_al_ul">
                    <?php
                    
                    $i = 0;
                    foreach( $menu_datas as $row ){
                    ?>
                    <li class="gnb_al_li">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){
                            if($k == 0)
                                echo '<ul>'.PHP_EOL;
                        ?>
                            <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div id="gnb_all_bg"></div>
        </div>
    </nav>
    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <?php if (!defined('_INDEX_')){ ?>
        <style>
            .head-visual {
                background-color: pink;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 200px; display: flex; justify-content: center; align-items: center;
            }
            .head-visual h2 {font-size: 2em;}
            .subTopBg_01 {background-image: url(<?php echo G5_THEME_IMG_URL ?>/bg01.jpg);}
            .subTopBg_02 {background-image: url(<?php echo G5_THEME_IMG_URL ?>/bg02.jpg);}
            .subTopBg_03 {background-image: url(<?php echo G5_THEME_IMG_URL ?>/bg01.jpg);}
            .subTopBg_04 {background-image: url(<?php echo G5_THEME_IMG_URL ?>/bg02.jpg);}
        </style>

    <div class="head-visual" id="page_title">
        <div class="text-wrapper">
            <h2 class="loc1D"></h2>
            <p>WELCOME WELCOME</p>
        </div>
    </div>
        <script>
            window.onload = function(){
                if ($('.loc1D').html() == '회사소개'){
                    $(".text-wrapper > p").html("HELLO HELLO");
                }
                if ($('.loc1D').html() == '공지사항'){
                    $(".text-wrapper > p").html("README README");
                }
                if ($('.loc1D').html() == '자유게시판'){
                    $(".text-wrapper > p").html("FREE FREE");
                }
                if ($('.loc1D').html() == '인증서'){
                    $(".text-wrapper > p").html("CERTIFICATE CERTIFICATE");
                }
            };
        </script>
    <?php } ?>

    <div id="container_wr">

	<?php if (defined('_INDEX_')){ ?>
	<div class="bx01-wrapper">
	<ul class="slide">
		<li><img src="<? echo G5_THEME_IMG_URL ?>/img1.jpg" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/img2.jpg" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/img3.jpg" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/img4.jpg" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/img5.jpg" alt=""></li>
		<li><img src="<? echo G5_THEME_URL ?>/img/img6.jpg" alt=""></li>
		<li><img src="<? echo G5_THEME_URL ?>/img/img7.jpg" alt=""></li>
	</ul>
	</div>

	<script>
		$(".slide").bxSlider({
            pager: false,
            controls: false,
            auto: true,
            pause: 6000,
        });
	</script>

	<? } else { ?>
		<div class="visual">
            <?php include_once (G5_THEME_PATH.'/skin/nav/mysubmenu.php') ?>
        </div>
	<? } ?>

    <p style="text-align: center; font-size: 1.25em; font-weight: 700; padding: 12px 0;">연습 페이지입니다! 원래 페이지와 무관합니다!</p>
   
    <div id="container">
        <?php if (!defined("_INDEX_")){?>
        <h2 id="container_title">
            <span title="<?php echo get_text($g5['title']); ?>">
            <?php echo get_head_title($g5['title']); ?>
            </span>
        </h2>
            <?php }