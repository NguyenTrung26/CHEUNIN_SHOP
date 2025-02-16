<?php
    $idpro = $_REQUEST['idpro'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="row mb">
    <div class="boxtitle">BÌNH LUẬN</div>
    <div class="boxcontent2 ">
            <?php
            echo "Nội dung bình luận: ".$idpro;
            // foreach ($binhluan as $bl) {
            //     extract($bl);
            //     echo '<li>
            //                 <a href="#">' . $msg . '</a>
            //             </li>';
            // }
            // foreach ($dmsp as $dm) {
            //     extract($dm);
            //     echo '<li>
            //                 <a href="index.php?act=sanpham&iddm=' . $id . '">' . $name . '</a>
            //             </li>';
            // }
            ?>

    </div>
    <div class="boxfooter binhluanform">
        <form action="binhluanform.php" method="post">
            <input type="text" name="noidung" placeholder="Nhập bình luận">
            <input type="submit" name="guibinhluan" value="Gửi">

        </form>
    </div>
</div>
</body>

</html>