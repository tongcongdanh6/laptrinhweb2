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

// Tới bước này thì $data chứa key = key của môn và value là giá trị điểm

$diemTrungBinh = round(array_sum($data) / count($data), 1);


switch ($diemTrungBinh) {
    case ($diemTrungBinh >= 9 && $diemTrungBinh <= 10):
        $ranking = "Xuất xắc";
        $gif_name = "clap.gif";
        $class_note = "success";
        break;
    case ($diemTrungBinh >= 7 && $diemTrungBinh <= 8.9):
        $ranking =  "Giỏi";
        $gif_name = "like.gif";
        $class_note = "primary";
        break;
    case ($diemTrungBinh >= 6 && $diemTrungBinh <= 6.9):
        $ranking =  "Khá";
        $gif_name = "good.gif";
        $class_note = "info";
        break;
    case ($diemTrungBinh >= 5 && $diemTrungBinh <= 5.9):
        $ranking =  "Trung bình";
        $gif_name = "unhappy.gif";
        $class_note = "secondary";
        break;
    case ($diemTrungBinh >= 3 && $diemTrungBinh <= 4.9):
        $ranking =  "Yếu";
        $gif_name = "hotface.gif";
        $class_note = "warning";
        break;
    default:
        $ranking =  "Kém";
        $gif_name = "cry.gif";
        $class_note = "danger";
        break;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1988216 - Tống Công Danh</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spicy+Rice%3A400&ver=5.1.8' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' type='text/css' media='all' />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/mdb.css" />
    <link rel="stylesheet" href="../../css/animate.min.css" />
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark primary-color animate__animated animate__fadeIn animate__slow">

            <a class="navbar-brand" href="#">Bài tập 3 - Lập trình web 2</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../">Trang chủ</a>
                    </li>
                </ul>
                <!-- Links -->
            </div>

        </nav>
        <!--/.Navbar-->
    </div>

    <div class="container-fluid cloudy-knoxville-gradient py-5">

        <div class="h2 text-center text-uppercase">Kết quả học tập</div>
        <hr />
        <div class="py-5 animate__animated animate__fadeIn animate__slow">
            <p class="note note-primary">
                <strong>Họ và tên: </strong>Tống Công Danh<br />
                <strong>MSSV: </strong>1988216
            </p>
        </div>


        <!-- Table with panel -->
        <div class="card card-cascade narrower animate__animated animate__fadeIn animate__slow animate__delay-1s">

            <!--Card image-->
            <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3">

                <div class="h3 py-2 white-text mx-3 text-uppercase">Bảng điểm</div>

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


        <div class="py-5 animate__animated animate__fadeIn animate__fast animate__delay-3s">
            <p class="note note-<?= $class_note ?>">
                <strong>Điểm trung bình: </strong><?= $diemTrungBinh ?><br />
                <strong>Xếp loại: </strong><?= $ranking ?><br />
                <?php if (isset($gif_name)) {
                ?>
                    <img src="images/<?= $gif_name ?>" class="img-fluid" width="150">
                <?php
                }
                ?>

            </p>
        </div>
    </div>


    <footer class="page-footer font-small indigo darken-4 py-4">

        <!-- Footer Elements -->
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center bg-transparent">© 2021 Copyright:
                        <a href="#"> Tống Công Danh - 1988216</a>
                    </div>
                    <!-- Copyright -->
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <ul class="list-unstyled d-flex mb-0">
                        <li>
                            <a class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="" role="button"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Footer Elements -->

    </footer>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/mdb.js"></script>
</body>

</html>