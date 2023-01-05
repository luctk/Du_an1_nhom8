<?php
require "../../model/pdo.php";
require "../../model/member.php";
include('../header/layout.php');

$dsMember = member_selectAll()
?>


<body>
    <div id="list">
        <h1>DANH SÁCH MEMBER</h1>


        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dsMember as $member) : ?>
                    <?php extract($member) ?>
                    <?php
                    if ($vai_tro == 1) {
                        $name_vt = "Quản trị viên";
                    } else {
                        $name_vt = "Khách hàng";
                    }
                    ?>
                    <tr>
                        <td><?= $id_member ?></td>
                        <td><?= $full_name ?></td>
                        <td><?= $username ?></td>
                        <td><?= $password ?></td>
                        <td><?= $email ?></td>
                        <td><?= $name_vt ?></td>
                        <td>
                            <a href="../member/edit.php?id_member=<?= $id_member ?>">Edit</a>
                            <a onclick="return confirm('Bạn có muốn xóa ?')" href="../member/delete.php?id_member=<?= $id_member ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</body>

</html>