<?php
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';
include 'view/header.php';

$spnew = sanpham_loadall_home();
$dmsp = danhmuc_loadall();
$dstop10 = sanpham_loadall_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = sanpham_loadall($kyw, $iddm);
            $tendm = load_ten_danhmuc($iddm);
            include 'view/sanpham.php';
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = sanpham_loadone($id);
                extract($onesp);
                $spcungloai = sanpham_load_cungloai($id, $iddm);

                include 'view/sanphamct.php';
            } else {
                include 'view/home.php';
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                taikhoan_insert($email, $user, $pass);
                $thongbao = "Đăng ký thành công";
            }
            include 'view/taikhoan/dangky.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $tk = checkuser($user, $pass);
                if (is_array($tk)) {
                    $_SESSION['user'] = $tk;
                    // $thongbao = "Đăng nhập thành công";
                    header('location:index.php');
                } else {
                    $thongbao = "Đăng nhập thất bại";
                }
            }
            include 'view/taikhoan/dangnhap.php';
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $addr = $_POST['addr'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                taikhoan_update($id, $user, $pass, $email, $addr, $phone);
                $_SESSION['user']=checkuser($user, $pass);
                // $thongbao = "Cập nhật thành công";
                header('location:index.php?act=edit_taikhoan');
            }
            include 'view/taikhoan/edit_taikhoan.php';
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = quenmk($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email không tồn tại";
                }
                // $thongbao = "Cập nhật thành công";
            }
            include 'view/taikhoan/quenmk.php';
            break;
        case 'thoat':
            unset($_SESSION['user']);
            header('location:index.php');
            include 'view/introduce.php';
            break;
        case 'introduce':
            include 'view/introduce.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'binhluan':
            include 'view/binhluan.php';
            break;
        case 'hoidap':
            include 'view/hoidap.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
