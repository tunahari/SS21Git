<?php
require 'data/data_user.php';
require 'data/news.php';
require 'include/header';
require 'database/connect.php'

?>


<?php
// $page = $_GET['page'];
// $page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";
//xuất
// print_r($path);

if (file_exists($path)) {
    require "{$path}";
} else {
    require 'modules/home/404.php';
}
?>


<?php
require 'include/footer';
?>