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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>1988216 - Tống Công Danh</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.css">
  <link rel="stylesheet" href="../../css/timeline.min.css">
  <link rel="stylesheet" href="../../css/animate.min.css" />
  <style>
    html,
    body,
    header,
    .view.jarallax {
      height: 100%;
      min-height: 100%;
    }
  </style>
</head>

<body class="event-lp">

  <!-- Navigation & Intro -->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">1988216 - Tống Công Danh</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="../../">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-offset="80">Liên hệ</a>
            </li>
          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(../../images/bg.jpg);">
      <div class="mask rgba-black-strong">
        <div class="container h-100 d-flex justify-content-center align-items-center mt-5">
          <div class="row smooth-scroll">
            <div class="col-md-12 text-center white-text">
              <div class="wow fadeInDown" data-wow-delay="0.2s">
                <h3 class="display-4 font-weight-bold mb-2 rgba-black-light py-2">1988216 - Tống Công Danh</h3>
                <hr class="hr-light my-4">
                <h4 class="subtext-header mt-2 mb-4">
                  Hiện tại là sinh viên lớp <b>Lập trình web 2</b> do thầy <b>Lương Vĩ Minh</b> phụ trách
                </h4>
              </div>
              <a href="#exercise" data-offset="90" class="btn btn-rounded btn-pink wow fadeInUp" data-wow-delay="0.2s">
                Đến bài tập 3</a>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

  </header>
  <!-- Navigation & Intro -->

  <!-- Main content -->
  <main>

    <div class="container-fluid">
      <!-- Section: Details -->
      <section id="exercise" class="my-5">
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
      </section>
      <!-- Section: Details -->

    </div>

    <!-- Streak -->
    <div class="streak streak-photo streak-long-2" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/46.jpg');">
      <div class="flex-center mask rgba-indigo-strong">
        <div class="text-center white-text">
          <h2 class="font-weight-bold mb-3 pt-4 mt-4">Conference about newest technologies coming soon!</h2>
          <p class="font-weight-bold white-text">Friday 17/10/2018, 8:00 am</p>

          <!--Grid row-->
          <div class="row mt-5 mb-5">

            <!--Grid column-->
            <div class="col-lg-4 col-md-4">
              <hr class="white mx-5">
              <h1 class="display-4 font-weight-bold white-text">
                <strong>20</strong>
              </h1>
              <hr class="white mx-5">
              <p class="font-weight-bold spacing">DAYS</p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-4">
              <h1 class="display-4 font-weight-bold white-text rgba-white-light mx-4 py-3 mt-3">
                <strong>12</strong>
              </h1>
              <p class="font-weight-bold spacing pt-3">HOURS</p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-4">
              <hr class="white mx-5">
              <h1 class="display-4 font-weight-bold white-text">
                <strong>35</strong>
              </h1>
              <hr class="white mx-5">
              <p class="font-weight-bold spacing">MINS</p>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
        </div>
      </div>
    </div>
    <!-- Streak -->


    <div class="container">

      <!--Section: FAQ v.5-->
      <section id="faq" class="pt-1">

        <!-- Section heading -->
        <h3 class="text-center my-5 pt-3 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Frequently Asked Question</strong>
        </h3>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto my-5 grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Fugit, error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <!-- Grid row -->
        <div class="row gradient-background d-flex justify-content-center">

          <!-- Grid column -->
          <div class="col-md-10 col-xl-10 pb-5 pt-3">

            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

              <!-- Accordion card -->
              <div class="card border-0">

                <!-- Card header -->
                <div class="card-header white z-depth-1 border-0 mb-1" role="tab" id="heading1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    <h5 class="mb-0 dark-grey-text">
                      #1 Lorem ipsum dolor sit amet.
                      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx">
                  <div class="card-body mb-1 rgba-indigo-strong white-text">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                      ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                      truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                      put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                      anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                      ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                      farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                      of them accusamus labore sustainable.</p>
                  </div>
                </div>
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card border-0">

                <!-- Card header -->
                <div class="card-header White z-depth-1 border-0 mb-1" role="tab" id="heading2">
                  <a class="collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    <h5 class="mb-0 dark-grey-text">
                      #2 Lorem ipsum dolor sit amet.
                      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx">
                  <div class="card-body mb-1 rgba-indigo-strong white-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                      mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card border-0">

                <!-- Card header -->
                <div class="card-header white z-depth-1 border-0 mb-1" role="tab" id="heading3">
                  <a class="collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    <h5 class="mb-0 dark-grey-text">
                      #3 Lorem ipsum dolor sit amet.
                      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx">
                  <div class="card-body mb-1 rgba-indigo-strong white-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                      laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                      quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                      dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                      qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                      non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                      voluptatem.
                    </p>
                  </div>
                </div>
              </div>
              <!-- Accordion card -->
            </div>
            <!--/.Accordion wrapper-->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>

      <hr>

      <!--Section: Contact v.2-->
      <section id="contact" class="mb-5">

        <!-- Section heading -->
        <h3 class="text-center my-5 pt-3 pb-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Contact us</strong>
        </h3>

        <!--Section description-->
        <p class="text-center w-responsive mx-auto my-5 grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Fugit, error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 col-xl-9">
            <form>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form">
                    <div class="md-form">
                      <input type="text" id="contact-name" class="form-control">
                      <label for="contact-name" class="">Your name</label>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form">
                    <div class="md-form">
                      <input type="text" id="contact-email" class="form-control">
                      <label for="contact-email" class="">Your email</label>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form">
                    <input type="text" id="contact-Subject" class="form-control">
                    <label for="contact-Subject" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                  <div class="md-form">
                    <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="contact-message">Your message</label>
                  </div>

                </div>
              </div>
              <!--Grid row-->

            </form>

            <div class="text-center text-md-left my-4">
              <a class="btn btn-pink btn-rounded">Send</a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 col-xl-3">
            <ul class="text-center list-unstyled">
              <li>
                <i class="fas fa-map-marker-alt fa-2x pink-text"></i>
                <p>Quận Bình Thạnh, Hồ Chí Minh</p>
              </li>

              <li>
                <i class="fas fa-phone fa-2x pink-text"></i>
                <p>+ 84 3759 6294</p>
              </li>

              <li>
                <i class="fas fa-envelope fa-2x pink-text"></i>
                <p>tong.congdanh@gmail.com</p>
              </li>
            </ul>
          </div>
          <!--Grid column-->

        </div>

      </section>
      <!--Section: Contact v.2-->

    </div>

  </main>
  <!-- Main content -->

  <!--Footer-->
  <footer class="page-footer indigo text-center text-md-left pt-0">

    <!--Footer Links-->
    <div class="container">

      <!--Grid row-->
      <div class="row pt-5 mb-3 text-center d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">About us</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Products</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Awards</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Help</a>
          </h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Contact</a>
          </h6>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr class="rgba-white-light" style="margin: 0 15%;">

      <!--Grid row-->
      <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

        <!--Grid column-->
        <div class="col-md-8 col-12 mt-5">
          <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

      <!--Grid row-->
      <div class="row pb-3">

        <!--Grid column-->
        <div class="col-md-12">

          <div class="footer-socials mb-5 flex-center">
            <!--Facebook-->
            <a class="p-2 m-2 fa-lg fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Twitter-->
            <a class="p-2 m-2 fa-lg tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Google +-->
            <a class="p-2 m-2 fa-lg gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Linkedin-->
            <a class="p-2 m-2 fa-lg li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Instagram-->
            <a class="p-2 m-2 fa-lg ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-4"> </i>
            </a>
            <!--Pinterest-->
            <a class="p-2 m-2 fa-lg pin-ic">
              <i class="fab fa-pinterest fa-lg white-text"> </i>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        Tống Công Danh. MSSV: 1988216
      </div>
    </div>
    <!--/Copyright-->

  </footer>
  <!--/Footer-->

  <!--  JQuery  -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!--  Bootstrap tooltips  -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!--  Bootstrap core JavaScript  -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!--  MDB core JavaScript  -->
  <script type="text/javascript" src="js/mdb.js"></script>

  <!-- Custom scripts -->
  <script>
    // Animation init
    new WOW().init();

  </script>

</body>

</html>