<?php
require "../../model/pdo.php";
require "../../model/comment.php";
include('../header/layout.php');

$ds_comment = comment_selectAll();

?>


<div id="list">
    <h1>DANH SÁCH BÌNH LUẬN</h1>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full_name</th>
                <th>Email</th>
                <th>Nội dung bình luận</th>
                <th>Ngày bình luận</th>
                <th>ID_member</th>
                <th>ID_tour</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ds_comment as $comment) : ?>
                <?php extract($comment) ?>
                <tr>
                    <td><?= $comment['id_comment'] ?></td>
                    <td><?= $full_name ?></td>
                    <td><?= $email ?></td>
                    <td><?= $content ?></td>
                    <td><?= $date_comment ?></td>
                    <td><?= $id_member ?></td>
                    <td><?= $id_tour ?></td>
                    <td><?php if ($status == 0) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" style="width:35px;height:35px;color:green" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        <?php endif ?>
                        <?php if ($status == 1) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" style="width:35px;height:35px;color:red" fill="none"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        <?php endif ?>
                    <td>
                        <a href="../comment/hide.php?id_comment=<?= $id_comment ?>">Hide</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


</div>

</body>

</html>