<?php
require_once("models/1988216_BT5_data.php");
?>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="text-center">
                    <h2>Danh sách lớp học</h2>
                    <p>Chọn lớp học bất kỳ sau đó ấn <b>Xem</b> để xem danh sách học viên trong lớp học</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <form action="index.php" method="get">
                    <div class="form-group">
                        <label for="classId">Chọn lớp học cần xem</label>
                        <select class="form-control" name="classId" id="classId" required>
                            <option value="">--Chọn lớp--</option>
                            <option value="1">Lớp 1</option>
                            <option value="2">Lớp 2</option>
                            <option value="3">Lớp 3</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Xem</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


<?php
if (isset($_GET["classId"])) {


?>
    <div class="section-container">
        <div class="container">

            <?php
            shuffle($data);
            $selectedData = array_slice($data, 0, 9);

            foreach ($selectedData as $d) {


            ?>
                <div class="col-xs-12 col-md-4">
                    <a href="chitietsv.php?id=<?=$d["id"]?>">
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