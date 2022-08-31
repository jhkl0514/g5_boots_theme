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

<style>
    .mView{
        width: 100%; padding-top: 36%; _background:red;
        position: relative; overflow: hidden;
    }
    .mView video{position: absolute; width: 100%; left: 50%; top: 50%; transform: translate(-50%,-50%)}
    .line{height: 1px; background: #ddd;}
</style>

<!-- <div class="mView">
    <img src="<? echo G5_THEME_IMG_URL ?>/pc01.jpg" alt="">
</div> -->

<div class="line"></div>
<div>
    <div class="row position-relative">
        <div class="mView">
        <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay muted loop></video>       
        </div>        
    </div>        
</div>

<div class="container">
    <div class="row p-5 m-5" >
        <div class="col-lg-7 position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt=""  class="img-fluid"> 
        </div>
        <div class="col-lg-5 d-flex flex-wrap">
            <h2 class="fs-2 fw-bold mt-auto">YBM 레몬만의<br> 전용뷰어로 수업</h2>
            <p class="fs-6 mt-3">화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br>
                YBM교육이 개발한 화상수업 전용 뷰어입니다.</p>
        </div>
    </div>
</div>

<div class="container visual rounded-5">
    <div class="row p-5 m-5 " >        
        <div class="col-lg-6 d-flex flex-wrap">
            <h2 class="fs-2 fw-bold mt-auto ">화상수업을 위해 개발된<br>e-Classbook</h2>
            <p class="fs-6 mt-3">오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>
            온라인 수업에 맞춰 개발된 온라인 전용 e-Classbook입니다.
            </p>
        </div>
        <div class="col-lg-6 position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="" class="img-fluid">          
        </div>
    </div>
</div>

<div class="container">
    <div class="row p-5 m-5" >
        <div class="col-lg-7 position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt=""  class="img-fluid"> 
        </div>
        <div class="col-lg-5 d-flex flex-wrap">
            <h2 class="fs-2 fw-bold mt-auto">지루할 틈이 없는 수업 진행</h2>
            <p class="fs-6 mt-3">온라인 교구와 액티비티로 흥미있는 수업이 진행됩니다.<br>
                                선생님과 함께 직접 수업에 참여합니다.
        </div>
    </div>
</div>

<div class="container visual-2 rounded-5">
    <div class="row p-5 m-5 " >        
        <div class="col-lg-6 d-flex flex-wrap">
            <h2 class="fs-2 fw-bold mt-auto ">외국인 선생님 +<br>
                                        한국인 선생님이 함께</h2>
            <p class="fs-6 mt-3">외국인 선생님과 수업할 때, 한국인 선생님도<br>
                옆에 함께합니다. 더 이상 영어가 두렵지 않습니다.
            </p>
        </div>
        <div class="col-lg-6 position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_04.png" alt="" class="img-fluid">          
        </div>
    </div>
</div>

<div class="container">
    <div class="row p-5 m-5" >
        <div class="col-lg-7 position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_05.png" alt=""  class="img-fluid"> 
        </div>
        <div class="col-lg-5 d-flex flex-wrap">
            <h2 class="fs-2 fw-bold mt-auto">
            Main Class 자신감 UP<br>
            예습도복습도<br>
            특별한 학습시스템
            </h2>
            <p class="fs-6 mt-3">본 수업 전/후 예복습 시스템과 숙제로 효과적인 확인학습을
    진행합니다. 혼자서도 척척! 자기주도 학습이 가능합니다.
        </div>
    </div>
</div>

<div class="container">
    <div class="row p-5 m-5">
    <div class="col-lg-12 text-center">
            <h2 class="fs-2 fw-bold mt-auto">
            YBM 레몬만의 밀착 학습관리
            </h2>
            <p class="fs-6 mt-3 mb-5">체계적인 관리를 통해 우리 아이의 학습효과를 극대화 합니다.
        </div>
        <div class="col-lg-12 d-flex justify-content-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/graph.png" alt=""  class="img-fluid"> 
        </div>        
    </div>
</div>

<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-2 col-sm-3 d-flex justify-content-center align-items-center">
                        <img src="<? echo G5_THEME_IMG_URL ?>/main_icon_report_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-10 col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title fs-6 fw-bold">학습 결과 보고서</h5>
                            <p class="card-text fw-bold text-secondary ">Daily Class Report</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-5 col-sm-4">
                    <img src="assets/images/bs-images/img-3x4.png" class="img-fluid w-100" alt="card-horizontal-image">
                    </div>
                    <div class="col-7 col-sm-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-5 col-sm-4">
                    <img src="assets/images/bs-images/img-3x4.png" class="img-fluid w-100" alt="card-horizontal-image">
                    </div>
                    <div class="col-7 col-sm-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-5 col-sm-4">
                    <img src="assets/images/bs-images/img-3x4.png" class="img-fluid w-100" alt="card-horizontal-image">
                    </div>
                    <div class="col-7 col-sm-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');