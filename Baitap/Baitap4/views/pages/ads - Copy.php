<?php
require_once("models/Data_1988216.php");

// random Data from $dataAds

shuffle($dataAds);
$totalItem = 10;
$totalSlide = round($totalItem / 4);

$Data = array_slice($dataAds, 0, $totalItem);
?>


<div class="container my-4">
    <h2 class="text-center">Quảng cáo</h2>
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <?php

            for ($i = 0; $i < $totalSlide; $i++) {
            ?>
                <?php if($i==0){ ?>
                    <div class="carousel-item active">
                <?php } else { ?>
                    <div class="carousel-item">
                <?php } ?>

                    <div class="row">
                    <?php 
                        // Loop item
                        for($j = $i*4; $j < (4*($i+1)) && $totalItem > 0; $j++, $totalItem--) {
                    ?>
                        <div class="col-md-3 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top" src="<?=$Data[$j]["thumbnail_url"]?>" alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title"><?=$Data[$j]["title"]?></h4>
                            <p class="card-text">
                                <a class="text-success small" href="<?=$Data[$j]["url"]?>" target="_blank"><?=$Data[$j]["url"]?></a>                            
                            </p>
                            </div>
                        </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


</div>