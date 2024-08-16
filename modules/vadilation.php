<?php
function fill_form($item)
{
    global $_POST;
    if (isset($_POST[$item])) {
        echo $_POST[$item];
    }
}

function form_error($item)
{
    global $error;
    if (isset($error[$item])) {
        echo $error[$item];
    }
}


