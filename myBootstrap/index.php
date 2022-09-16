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
        <!-- <video src="<?php echo G5_THEME_IMG_URL ?>/visual01.mp4" class="position-absolute" autoplay muted loop></video> -->
    </div>
</div>

<div id="section-1st" class="container">
    <div class="row flex-column flex-lg-row pt-5">
        <div class="image col col-md-7 order-2 order-lg-1 d-flex justify-content-center position-relative">
            <img class="" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01.png" alt="">
            <img class="position-absolute start-50 top-0 translate-middle-x" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_dice.png" alt="">
            <img class="position-absolute end-0 bottom-0" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_aunt.png" alt="">
            <div class="car position-absolute d-flex flex-column align-items-center">
                <img class="w-50" src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_car.png" alt="">
                <img src="<?php echo G5_THEME_IMG_URL ?>/section_visual01_carDesc.png" alt="">
            </div>
        </div>
        <div class="text p-5 col col-md-5 order-1 order-lg-2 d-flex flex-column justify-content-center mb-3 mb-lg-0">
            <h2 class="fw-bolder fs-2 mb-4">YBM 레몬만의 전용뷰어로 수업</h2>
            <p class="fs-5">화상 회의실 같은 딱딱한 뷰어가 아닙니다. YBM교육이 개발한 <span class="fw-bold text-success">화상수업 전용 뷰어</span>입니다.</p>
        </div>
    </div>
</div>

<div id="section-2nd" class="container">
    <div class="wrapper py-5">
        <div class="row flex-column flex-lg-row p-5">
            <div class="text p-5 col col-md-6 d-flex flex-column justify-content-center ms-auto">
                <h2 class="fw-bolder fs-2 mb-4">화상수업을 위해 개발된 e-Classbook</h2>
                <p class="fs-5">오프라인 교재를 그대로 올려서 수업하지 않습니다.  온라인 수업에 맞춰 개발된 <span class="fw-bold text-success">온라인 전용 e-Classbook</span>입니다.</p>
            </div>
            <div class="image col col-md-6 p-5 ps-0">
                <img src="<?php echo G5_THEME_IMG_URL ?>/section_2nd_visual01.png" alt="">
            </div>
        </div>
    </div>
</div>

<div id="section-3rd" class="container pt-5">
    <div class="row flex-column flex-lg-row">
        <div class="image col col-md-6 order-2 order-lg-1 d-flex justify-content-end">
            <div class="position-relative">
                <img src="<?php echo G5_THEME_IMG_URL ?>/section_3rd_visual01.png" alt="">
                <img class="position-absolute" src="<?php echo G5_THEME_IMG_URL ?>/section_3rd_visual01_dartboard.png" alt="">
            </div>
        </div>
        <div class="text p-5 col col-md-6 order-1 order-lg-2 d-flex flex-column justify-content-center me-auto">
            <h2 class="fw-bolder fs-2 mb-4">지루할 틈이 없는 수업 진행</h2>
            <p class="fs-5"><span class="fw-bold text-success">온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다. 선생님과 함께 직접 수업에 참여합니다.</p>
        </div>
    </div>
</div>

<div id="section-4th" class="container">
    <div class="wrapper py-5">
        <div class="row flex-column flex-lg-row p-5">
            <div class="text p-5 col col-md-6 d-flex flex-column justify-content-center ms-auto">
                <h2 class="fw-bolder fs-2 mb-4">외국인 선생님과 한국인 선생님이 함께</h2>
                <p class="fs-5">외국인 선생님과 수업할 때, 한국인 선생님도 <span class="fw-bold text-success">옆에 함께</span>합니다. 더이상 영어가 두렵지 않습니다.</p>
            </div>
            <div class="image col col-md-6">
                <div class="position-relative">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/section_4th_visual01.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section-5th" class="container">
    <div class="row flex-column flex-lg-row">
        <div class="image col col-md-6 order-2 order-lg-1">
            <div class="position-relative">
                <img src="<?php echo G5_THEME_IMG_URL ?>/section_5th_visual01.png" alt="">
            </div>
        </div>
        <div class="text p-5 col col-md-6 order-1 order-lg-2 d-flex flex-column justify-content-center">
            <h2 class="fw-bolder fs-2 mb-4">Main Class 자신감 <span class="text-success">UP</span> <br>예습도<img class="align-middle" src="<?php echo G5_THEME_IMG_URL ?>/online.png" alt=""> 복습도<img class="align-middle" src="<?php echo G5_THEME_IMG_URL ?>/online.png" alt="">  <br>특별한 학습시스템</h2>
            <p class="fs-5">본 수업 전/후 예복습 시스템과 숙제로 효과적인 확인학습을 진행합니다. 혼자서도 척척! 자기주도 학습이 가능합니다.</p>
        </div>
    </div>
</div>

<div id="section-6th" class="container">
    <div class="text p-5 mx-auto mb-5">
        <h2 class="fw-bolder text-center fs-2 mb-4">YBM 레몬만의 밀착 학습관리</h2>
        <p class="text-center fs-5">체계적인 관리를 통해 우리 아이의 학습효과를 극대화 합니다.</p>
    </div>
    <div class="image mb-5">
        <img class="mx-auto d-block" src="<?php echo G5_THEME_IMG_URL ?>/section_6th_visual01.png" alt="">
    </div>


        <div class="row upper g-3 mb-3">
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_report.png);"></i>
                    <div class="description">
                        <h5>학습 결과 보고서</h5>
                        <p>Daily Class Report</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>학습자의 학업 점수와 학습내용을 요약한 보고서를 발송합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_achievement.png);"></i>
                    <div class="description">
                        <h5>성취도 테스트</h5>
                        <p>Achievement Test</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>3개월에 한번씩 학습자의 성취도를 평가하여 피드백을 제공합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_solution.png);"></i>
                    <div class="description">
                        <h5>화상솔루션</h5>
                        <p>Online Learning Solutions</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>YBM에서 직접 개발한 화상솔루션과 교안으로 수업을 진행합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_homework.png);"></i>
                    <div class="description">
                        <h5>온·오프라인 숙제관리</h5>
                        <p>Homework</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>수업 후 온라인ㆍ오프라인 숙제를 진행하여 학습 효과를 높입니다.</p>
                    </div>
                </div>
            </div>
        </div>

    

        <div class="row lower g-3 mb-3">
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_attendance.png);"></i>
                    <div class="description">
                        <h5>출결관리</h5>
                        <p>Attendance</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>학습자의 출결 상황을 한 눈에 파악할 수 있습니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_consult.png);"></i>
                    <div class="description">
                        <h5>정기상담관리</h5>
                        <p>Regular Consulting</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>학부모 정기 상담을 통해 아이의 학습 성취를 관리하고 학습 목표를 달성하도록 합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_notification.png);"></i>
                    <div class="description">
                        <h5>모바일 알림</h5>
                        <p>Notification</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>Mobile에서 아이의 학습현황을 실시간으로 조회하고 알림을 받습니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="frontalText px-3 py-4 d-flex gap-3 shadow rounded">
                    <i class="sprite d-block" style="background-image: url(<?php echo G5_THEME_IMG_URL ?>/sprite_reward.png);"></i>
                    <div class="description">
                        <h5>포인트 제도</h5>
                        <p>Reward System</p>
                    </div>
                    <div class="hover rounded p-4">
                        <p>학습 보상으로 지급되는 Point는 학습 동기를 부여합니다.</p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    
<div id="section-latest" class="container my-5 py-5">
    <?php echo latest('theme/pic_basic', 'gallery', 8, 23); ?>
</div>
<script>
    const latestSlide = new Swiper('#section-latest .swiper', {
        slidesPerView: 1,
        spaceBetween: 8,

        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 12,
            },

            992: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        }
    });
</script>

<div id="section-review" class="py-5">
    <div class="container px-5">
        <?php echo latest('theme/pic_board', 'free', 3, 23); ?>
    </div>
</div>
<script>
    const reviewSlide = new Swiper('#section-review .swiper', {
        slidesPerView: 1,
        spaceBetween: 8,

        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 16,
            },

            992: {
                slidesPerView: 3,
                spaceBetween: 48,
            },
        }
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');