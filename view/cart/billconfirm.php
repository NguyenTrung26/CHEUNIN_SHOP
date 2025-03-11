<div class="row">
    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">Cám ơn</div>
                <div class="row boxcontent" style="text-align: center;">
                    <h2>Cảm ơn bạn đã đặt hàng</h2>
                    <p>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất</p>
                    <a href="index.php"><input type="button" value="Quay lại trang chủ"></a>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">Mã đơn hàng</div>
                <div class="row boxcontent" style="text-align: center;">
                    <h2></h2>

                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">Thông tin đơn hàng</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td>Họ tên</td>
                            <td><?= $name ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= $addr ?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?= $phone ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $email ?></td>
                        </tr>
                        <tr>
                            <td>Phương thức thanh toán</td>
                            <td><?= $pttt ?></td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="row mb">
                <div class="boxtitle">Phương thức thanh toán</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" value="1" checked> Thanh toán khi nhận hàng</td>
                            <td><input type="radio" name="pttt" value="2"> Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt" value="3"> Thanh toán online</td>
                        </tr>
                    </table>
                    

            </div>
        </div>
    </div>