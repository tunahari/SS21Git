<?php
$id = (int)$_GET['id'];
$sql = "DELETE FROM `tbl_user` WHERE `tbl_user`.`user_id` = $id ";
$result = mysqli_query($conn, $sql);
if ($result == true) {
    header('Location: ?mod=user&act=main');
}
