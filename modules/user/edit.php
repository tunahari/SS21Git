<?php
$id = (int)$_GET['id'];
$sql = "SELECT * FROM `unitop`.`tbl_user` WHERE `tbl_user`.`user_id` = $id;";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result); //lấy dữ liệu bản ghi

echo "<pre>";
print_r($item);
echo "</pre>";
?>

<?php
if (isset($_POST['btn_edit'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `tbl_user`
SET username = '$username', fullname = '$fullname', password = '$password', gender = '$gender', email = '$email'
WHERE `user_id` = $id;";
    $result = mysqli_query($conn, $sql);
    if ($result == true) {
        echo "Bạn đã câp nhật dữ liệu thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<div class="content">
    <form action="" method="post">
        <input type="text" name="fullname" value="<?php echo $item['fullname'] ?>" placeholder="Fullname"><br><br>
        <input type="text" name="username" value="<?php echo $item['username'] ?>" placeholder="User name"><br><br>
        <input type="password" name="password" value="<?php echo $item['password'] ?>" placeholder="PassWord"><br><br>
        <input type="email" name="email" value="<?php echo $item['email'] ?>" placeholder="Email"><br><br>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">female</option>
        </select><br><br>
        <input type="submit" name="btn_edit" value="Update">
    </form>
</div>