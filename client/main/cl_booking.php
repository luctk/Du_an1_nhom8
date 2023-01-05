<div class="main_booking">
        <H1>THANH TOÁN</H1>
        
        <div class="booking">
            <form action="" method="post">
                <h3>THÔNG TIN KHÁCH HÀNG</h3>
                <p>Họ tên</p><input name="full_name" type="text" required><br>
                <p>Số điện thoại</p><input type="text" name="tel" required><br>
                <p>Email</p><input type="text" name="email" required><br>
                <p>Địa chỉ</p><input type="text" name="address" required><br>

                <button onclick="alert('Đặt tour thành công!')" name="thanhtoan-btn">THANH TOÁN</button>
            </form>
            <div class="info_tour">
                <h3>THÔNG TIN TOUR</h3><br>
                <li>Mã tour: <?= $id_tour ?></li>
                <li>Lịch khởi hành: <?= $date ?></li>
                <li>Số khách: <?= $peoples ?></li>
                <li>Số trẻ em: <?= $children ?></li>
                <li>Tổng chi phí: <span><?= $total_price ?> VND</span></li>
            </div>
        </div>
    </div>