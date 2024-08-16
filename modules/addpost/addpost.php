<?php

require 'modules/vadilation.php';
$error = array();

if (isset($_POST['btn_submit'])) {
    if (empty($_POST['title'])) {
        $error['title'] = 'Không được để trống tiêu đề';
    }
    if (empty($_POST['content'])) {
        $error['content'] = 'Không được để trống Content';
    }
    if (empty($_FILES['file'])) {
        $error['file'] = 'Bạn chưa chọn file nào';
        // echo "<pre>";
        // print_r($upload_file);
        // echo "</pre>";
    }

    if (empty($error)) {
        $upload_dir = "public/img/img_news/";
        $upload_file = $upload_dir . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);

        global $list_news;
        $lenght = count($list_news);
        $list_news[$lenght + 1]['id'] = $lenght + 1;
        $list_news[$lenght + 1]['title'] = $_POST['title'];
        $list_news[$lenght + 1]['content'] = $_POST['content'];
        $list_news[$lenght + 1]['img'] = $upload_file;

        echo "<pre>";
        print_r($list_news);
        echo "</pre>";
    }

    echo "<pre>";
    print_r($error);
    echo "</pre>";
}
?>

<h1>Thêm bài viết</h1>
<form action="" enctype="multipart/form-data" method="post">
    <label for="titel">Nhập tiêu đề bài viết</label><br>
    <input id="titel" name="title" type="text" placeholder="Tiêu đề" value="<?php echo fill_form('title') ?>"> <br>
    <span style="color: red;"><?php echo form_error("title") ?> </span><br>
    <label for="review">Mô tả ngắn</label><br>
    <input style="width: 200px;  height: 50px;" id="review" name="review" type="text" placeholder=""><br>
    <br>

    <label for="content">Nhập Nội Dung Bài Viết</label><br>
    <textarea name="content" id="content" value="<?php echo fill_form('content') ?>" rows="5" cols="70">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
    <br>
    <span style="color: red;"><?php echo form_error("content") ?> </span><br>

    <input type="file" name="file" value=""> <br><br>

    <span style="color: red;"><?php echo form_error("file") ?> </span><br>


    <input type="submit" name="btn_submit" value="Upload">

    <br>

</form>