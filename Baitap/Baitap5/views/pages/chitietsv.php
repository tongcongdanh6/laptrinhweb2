<?php
require_once("models/1988216_BT5_data.php");
$student = [];
if (isset($_GET["id"])) {
    foreach ($data as $d) {
        if ($d["id"] == $_GET["id"]) {
            $student = $d;
            break;
        }
    }
}
?>

<?php
if (count($student) <= 0) {
?>
    <div class="container">
        <div class="alert alert-danger">Không tồn tại sinh viên nào để xem chi tiết</div>
    </div>
<?php
}
?>

<?php
if (count($student) > 0) {
?>
    <div class="container text-center">
        <h2>Chi tiết sinh viên</h2>
        <div class="row">
            <div class="col-md-3">
                <img src="<?= $student["imgpath"] ?>" class="img-fluid">
            </div>
            <div class="col-md-9 text-left">
                <p class="text-uppercase"><?= $student["fullname"] ?></p>
                <p class="text-uppercase">MSSV: <?= random_int(9999, 19999) ?></p>
                <p class="text-uppercase">ĐTB: <?= number_format($student["dtb"], 1) ?></p>
            </div>
        </div>
    </div>


    <?php

    function frand($min, $max, $decimals = 0)
    {
        $scale = pow(10, $decimals);
        return mt_rand($min * $scale, $max * $scale) / $scale;
    }

    $arrNameOfSubject = array(
        'Toán cao cấp',
        'Vật lý đại cương',
        'Hóa học đại cương',
        'Lý thuyết đồ thị',
        'Mạng máy tính',
        'Lập trình web 2',
        'Lập trình web 1',
        'Lập trình OOP',
        'Kỹ thuật lập trình',
        'Nhập môn lập trình',
        'Cấu trúc DL & GT',
        'Nhập môn CNPM'
    );

    $randomedSubject = array_rand($arrNameOfSubject, random_int(3, 12)); // Random key của mảng arrNameOfSubject từ 3-12 môn

    $data = array(); // Data lưu key của Môn đã random và điểm

    // Với số lượng môn đã random thì random điểm
    foreach ($randomedSubject as $value) {
        $data[$value] = frand(0, 10, 1);
    }
    ?>


    <div class="container-fluid">
        <!-- Table with panel -->
        <div class="card card-cascade narrower animate__animated animate__fadeIn animate__slow animate__delay-1s">

            <!--Card image-->
            <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 text-center">

                <div class="h3 py-2 white-text mx-3 text-uppercase" style="font-family:Roboto, sans-serif">Bảng điểm</div>

            </div>
            <!--/Card image-->

            <div class="px-4">

                <div class="table-wrapper">
                    <!--Table-->
                    <table class="table table-hover mb-0">

                        <!--Table head-->
                        <thead>
                            <tr>
                                <?php
                                foreach ($data as $key => $value) {


                                ?>
                                    <th class="th-lg">
                                        <strong><?= $arrNameOfSubject[$key] ?></strong>
                                    </th>

                                <?php
                                }
                                ?>
                            </tr>
                        </thead>
                        <!--Table head-->

                        <!--Table body-->
                        <tbody>
                            <tr>
                                <?php
                                foreach ($data as $value) {
                                ?>
                                    <td><?= $value ?></td>
                                <?php
                                }
                                ?>
                            </tr>
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>

            </div>

        </div>
        <!-- Table with panel -->
    </div>

<?php
}
?>