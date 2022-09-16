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

<div class="navbar navbar-light bg-light">
    <div class="container">
        <a href="javascript:void(0);" class="fw-semibold">즐겨찾기 추가</a>
        <div class="ms-auto d-flex">
            <a href="javascript:void(0);" class="p-2 fw-semibold">레벨테스트</a>
            <a href="javascript:void(0);" class="p-2 fw-semibold">무료체험</a>
            <a href="javascript:void(0);" class="p-2 fw-semibold">마이레몬</a>
            <a href="javascript:void(0);" class="p-2 fw-semibold">고객센터</a>
        </div>
    </div>
</div>
연습사이트입니다! 원래 사이트와 무관합니다!
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="./"><img src="<?php echo G5_THEME_IMG_URL ?>/LOGO.svg" alt="LOGO" style="width: 180px;"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="collapsibleNavId">
            <ul class="navbar-nav mt-2 mt-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li> -->

                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                ?>
                <li class="nav-item dropdown fw-bold fs-6">
                    <a href="<?php echo $row['me_link']; ?>" id="navbarDropdownMenuLink" role="button" aria-expanded="false" target="_<?php echo $row['me_target']; ?>" class="nav-link" data-bs-toggle="dropdown"><?php echo $row['me_name'] ?></a>
                    
                    <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){

                            if( empty($row2) ) continue; 

                            if($k == 0)
                                echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">'.PHP_EOL;
                        ?>

                            <li >
                                <a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"  class="dropdown-item">
                                    <?php echo $row2['me_name'] ?>
                                </a>
                            </li>

                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>

                </li>
                <?php $i++; ?>
                <?php } //end foreach $row ?>
            </ul>
        </div>

        <div class="login-wrapper d-none d-md-block">
            <a href="javascript:void(0);" class="d-flex align-items-center">
                <img src="<?php echo G5_THEME_IMG_URL ?>/NotLoggedIn.svg" alt="anonymous" class="me-2" style="width: 40px;">
                <span class="fw-semibold me-4">로그인하기</span>
                <span class="rounded"></span>
            </a>
        </div>
    </div>
</nav>