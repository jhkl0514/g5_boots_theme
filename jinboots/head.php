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
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="<? echo G5_URL?>">
                <img src="<? echo G5_THEME_IMG_URL ?>/logo.svg" alt="" style="width:180px">
            </a>

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">

                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">                   

                    <?php
                    $menu_datas = get_menu_db(0, true);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo $row['me_link']; ?>" id="navbarDropdownMenuLink" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false" target="_<?php echo $row['me_target'];  ?>">
                            <?php echo $row['me_name'] ?></a>
                        </a>

                        <!-- 서브 -->
                        <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->

                        <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){

                                if( empty($row2) ) continue; 

                                if($k == 0)
                                    echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">'.PHP_EOL;
                        ?>
                                <li>
                                    <a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="dropdown-item">
                                    <?php echo $row2['me_name'] ?></a>
                                </li>
                        <?php
                            $k++;
                            }   //end foreach $row2

                            if($k > 0)
                                echo '</ul>'.PHP_EOL;
                        ?>


                        <!-- 서브 -->
                    </li>
                   
                    <?php
                    $i++;
                    }   //end foreach $row

                ?>     
                    
                </ul>   

               


            </div>
      </div>
    </nav>







    

<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->

    <!-- 메인페이지는 100% 서브는 1400 -->   
    <?  if(defined('_INDEX_')) { ?>
        <div class="container_wr">
    <? } else {?>
        <div class="container">
    <?}?>    
    
