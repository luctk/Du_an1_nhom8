<?php
require "../../model/pdo.php";
require "../../model/booking.php";
include('../header/layout.php');

$dsBooking = booking_selectAll();

?>


<body>
    <div id="list">
        <h1>DANH SÁCH BOOKING</h1>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>ADDRESS</th>
                    <th>DATE</th>
                    <th>Peoples</th>
                    <th>Children</th>
                    <th>TOTAL_PRICE</th>
                    <th>id_tour</th>
                    <th>status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dsBooking as $booking) : ?>
                    <?php extract($booking) ?>

                    <tr>
                        <td><?= $id_booking ?></td>
                        <td><?= $full_name ?></td>
                        <td><?= $tel ?></td>
                        <td><?= $email ?></td>
                        <td><?= $address ?></td>
                        <td><?= $date ?></td>
                        <td><?= $peoples ?></td>
                        <td><?= $children ?></td>
                        <td><?= $total_price ?></td>
                        <td><?= $id_tour ?></td>
                        <td><?php if ($status == '') : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width:35px;height:35px;color:red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            <?php endif ?>
                            <?php if ($status == 1) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width:35px;height:35px;color:green" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="../booking/edit.php?id_booking=<?= $id_booking ?>">Stat</a>
                            <a href="../booking/detele.php?id_booking=<?= $id_booking ?>">Succ</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</body>

</html>