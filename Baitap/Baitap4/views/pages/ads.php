<?php
require_once("models/Data_1988216.php");

// random Data from $dataAds

shuffle($dataAds);
$totalItem = 10;
$totalSlide = round($totalItem / 4);

$data = array_slice($dataAds, 0, $totalItem);
?>


<div class="container my-4">
    <h2 class="text-center">Quảng cáo</h2>
    <!--Carousel Wrapper-->
    <!-- Set up your HTML -->
    <div class="row">
        <div class="col">
            <div class="owl-carousel owl-theme">
                <?php
                foreach ($data as $value) {
                ?>
                    <div>
                        <img src="<?=$value["thumbnail_url"]?>" class="img-thumbnail">
                        <h3 class="text-primary text-center"><?=$value["title"]?></h3>
                        <a href="<?=$value["url"]?>" target="_blank"><?=$value["url"]?></a>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>

</div>