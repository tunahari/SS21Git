<?php
// require 'database/connect.php'

if (isset($_POST['btn_submit'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    // echo "<pre>";
    // print_r($member);
    // echo "</pre>";
    $sql = "INSERT INTO `tbl_user` (`fullname`,`username`,`password`,`email`,`gender`)" .
        "VALUE ( '{$fullname}','{$username}','{$password}','{$email}','{$gender}' )";
    if (mysqli_query($conn, $sql)) {
        echo "Them Thanh Cong";
    } else {
        echo "LOIIIIIIIII" . mysqli_connect_error();
    }
}
?>
<div class="content">
    <form action="" method="post">
        <input type="text" name="fullname" value="" placeholder="Fullname"><br><br>
        <input type="text" name="username" value="" placeholder="User name"><br><br>
        <input type="password" name="password" value="" placeholder="PassWord"><br><br>
        <input type="email" name="email" value="" placeholder="Email"><br><br>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">female</option>
        </select><br><br>
        <input type="submit" name="btn_submit" value="add">
    </form>
</div>