<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<!-- 하단 시작 { -->
<footer>
    <div class="footer-upper bg-secondary">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-2">
                    <a href="javascript:void(0);">YBM Lemon 스토리</a>
                    <hr>
                    <ul>
                        <li><a href="#!">상담신청</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="javascript:void(0);">수강신청</a>
                    <hr>
                    <ul>
                        <li><a href="#!">수강신청</a></li>
                        <li><a href="#!">무료체험</a></li>
                        <li><a href="#!">레벨테스트</a></li>
                        <li><a href="#!">무료체험&레벨테스트 신청확인</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="javascript:void(0);">커뮤니티</a>
                    <hr>
                    <ul>
                        <li><a href="#!">Gallery</a></li>
                        <li><a href="#!">Lemon Seed Mall</a></li>
                        <li><a href="#!">이벤트</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="javascript:void(0);">마이클래스</a>
                    <hr>
                    <ul>
                        <li><a href="#!">Calender</a></li>
                        <li><a href="#!">Report</a></li>
                        <li><a href="#!">숙제 제출 및 확인</a></li>
                        <li><a href="#!">Lemon Seed</a></li>
                        <li><a href="#!">수강현황</a></li>
                        <li><a href="#!">정회원 공지사항</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="javascript:void(0);">My Lemon</a>
                    <hr>
                    <ul>
                        <li><a href="#!">수강신청 내역</a></li>
                        <li><a href="#!">포인트몰 구매내역</a></li>
                        <li><a href="#!">학부모정보</a></li>
                        <li><a href="#!">학습자정보</a></li>
                        <li><a href="#!">1:1답변확인</a></li>
                        <li><a href="#!">학습장애답변확인</a></li>
                        <li><a href="#!">상담신청내역</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="javascript:void(0);">고객센터</a>
                    <hr>
                    <ul>
                        <li><a href="#!">공지사항</a></li>
                        <li><a href="#!">FAQ</a></li>
                        <li><a href="#!">1:1상담</a></li>
                        <li><a href="#!">학습장애신고</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-lower pt-3 pb-5 bg-dark">
        <div class="container d-flex justify-content-between">
            <ul class="links d-flex gap-3 align-items-center">
                <li><a class="text-white-50 fw-semibold fs-6" href="#!">로그인</a></li>
                <li><a class="text-white-50 fw-semibold fs-6" href="#!">이용약관</a></li>
                <li><a class="text-white-50 fw-semibold fs-6" href="#!">개인정보처리방침</a></li>
                <li><a class="text-white-50 fw-semibold fs-6" href="#!">영상정보처리기기 운영관리방침</a></li>
            </ul>

            <ul class="icons d-flex gap-2 align-items-center">
                <li><a href="#!"><img src="<?php echo G5_THEME_IMG_URL ?>/icon_blog.png" alt=""></a></li>
                <li><a href="#!"><img src="<?php echo G5_THEME_IMG_URL ?>/icon_instagram.png" alt=""></a></li>
                <li><a href="#!"><img src="<?php echo G5_THEME_IMG_URL ?>/icon_youtube.png" alt=""></a></li>
            </ul>
        </div>

        <hr>
        <div class="container text-secondary">
            <p><span class="fw-semibold text-white-50">사업자등록번호</span>: 000-00-00000</p>
            <p><span class="fw-semibold text-white-50">대표이사</span>: 화찬권</p>
            <p><span class="fw-semibold text-white-50">통신판매업신고번호</span>: 제 00-000호</p>
            <p><span class="fw-semibold text-white-50">TEL</span>: 0000-0000</p>
            <p><span class="fw-semibold text-white-50">FAX</span>: 00-0000-0000</p>
            <p><span class="fw-semibold text-white-50">E-mail</span>: abcde@fgi.jk.lm</p>
            <p><span class="fw-semibold text-white-50">서울특별시 서울 서울 0000-0 서울</span></p>
        </div>
    </div>
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");