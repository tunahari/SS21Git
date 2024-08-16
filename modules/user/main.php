<?php
$sql = "SELECT * FROM `tbl_user`";
$result = mysqli_query($conn, $sql);
$list_user = array();
$num_row = mysqli_num_rows($result);
if ($num_row > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_user[] = $row;
    }
}

foreach ($list_user as &$user) {
    $user['url_edit'] = "?mod=user&act=edit&id={$user['user_id']}";
    $user['url_delete'] = "?mod=user&act=delete&id={$user['user_id']}";
}
// echo "<pre>";
// print_r($list_user);
// echo "</pre>";
?>

<a href="?mod=user&act=add">add member</a>
<style>
    .table_data thead tr td {
        font-weight: bold;
        border-bottom: 2px solid #333;

    }

    .table_data tr td {
        border-bottom: 1px solid #333;
        padding: 10px 15px;
    }
</style>
<div class="content">Member <br>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>ID</td>
                <td>FullName</td>
                <td>UserName</td>
                <td>Gender</td>
                <td>Thao Tác</td>
            </tr>
        </thead>
        <?php
        $temp = 0;
        if (!empty($list_user)) {
            foreach ($list_user as $member) {
                $temp++;
        ?>
                <tbody>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo $member['user_id']; ?></td>
                        <td><?php echo $member['fullname']; ?></td>
                        <td><?php echo $member['username']; ?></td>
                        <td><?php echo $member['gender']; ?></td>
                        <td><a href="<?php echo $member['url_edit']; ?>">Edit</a> | <a onclick="return confirm('DELETE')" href="<?php echo $member['url_delete']; ?>">Delete</a></td>
                    </tr>
                </tbody>
        <?php
            }
        }
        ?>
    </table>
    <br>
    <p> Có <?php
            echo $num_row;
            // echo count($list_user);
            ?> thành viên trong bảng</p>
</div>
<!-- end content -->