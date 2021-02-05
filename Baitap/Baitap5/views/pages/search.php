<?php
require_once("models/1988216_BT5_data.php");
?>

<div class="container text-center">
    <h2>Tìm kiếm sinh viên</h2>
    <form method="get" action="search.php">
        <div class="row">

            <div class="col-md-2">
                <input type="checkbox" class="form-check-input" name="findByName" id="findByName" checked>
            </div>
            <div class="col-md-10">
                <input type="text" name="studentName" placeholder="Nhập tên sinh viên vào đây" class="form-control">
            </div>

        </div>

        <div class="row">

            <div class="col-md-2">
                <input type="checkbox" class="form-check-input" name="findByDtbRange" id="findByDtbRange">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 p-0 m-0">
                        <input type="number" name="dtbMin" step="0.5" placeholder="Cận điểm trung bình dưới" class="form-control">
                    </div>
                    <div class="col-md-6 p-0 m-0">
                        <input type="number" name="dtbMax" step="0.5" placeholder="Cận điểm trung bình trên" class="form-control">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>
    </form>
</div>

        <?php
        function convert_vi_to_en($str)
        {
            $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
            $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
            $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
            $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
            $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
            $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
            $str = preg_replace("/(đ)/", "d", $str);
            $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
            $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
            $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
            $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
            $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
            $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
            $str = preg_replace("/(Đ)/", "D", $str);
            //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
            return $str;
        }


        if (isset($_GET["findByName"])) {
            $resultArray = [];
            foreach ($data as $d) {

                $str = strtolower(trim(convert_vi_to_en($d["fullname"])));
                $parttern = "/" . strtolower(trim(convert_vi_to_en($_GET["studentName"]))) . "/i";

                if (preg_match($parttern, $str)) {
                    if(isset($_GET["findByDtbRange"])) {
                        if($d["dtb"] >= $_GET["dtbMin"] && $d["dtb"] <= $_GET["dtbMax"]) {
                            array_push($resultArray, $d);
                        }
                    }
                    else {
                        array_push($resultArray, $d);
                    }
                }
            }
        }
        ?>

        <?php
        if (isset($resultArray) && count($resultArray) > 0) {


        ?>
            <div class="section-container">
                <div class="container">

                    <?php
                    foreach ($resultArray as $d) {
                    ?>
                        <div class="col-xs-12 col-md-4">
                            <a href="chitietsv.php?id=<?= $d["id"] ?>">
                                <div class="card student-card text-center">
                                    <img class="card-img-top" src="<?= $d["imgpath"] ?>" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $d["fullname"] ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>

        <?php
        if (isset($resultArray) && count($resultArray) <= 0) {
        ?>

            <div class="container">
                <div class="alert alert-warning">Không tồn tại sinh viên nào thỏa yêu cầu tìm kiếm</div>
            </div>

        <?php
        }
        ?>