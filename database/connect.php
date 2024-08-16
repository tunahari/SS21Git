<?php
$conn = mysqli_connect('localhost', 'root', '', 'unitop');
if (!$conn) {
    echo 'Conect Failse' . mysqli_connect_error();
    die();
} 
// else {
//     echo 'ketnoi thanh cong';
// }
