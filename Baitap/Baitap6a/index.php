<?php
if(!isset($_GET["q"])) {
  $title = "Thông tin sinh viên";
  $content = "thongtinsv";
  include("views/layout.php");
}
else {
  switch($_GET["q"]) {
    case "imagesharing":
      $title = "Chia sẻ hình ảnh";
      $content = "imagesharing";
      include("views/layout.php");
      break;
    default:
      $title = "Thông tin sinh viên";
      $content = "thongtinsv";
      include("views/layout.php");
      break;
  }
}
