<div class="news">

    <?php

    $temp = 0;
    foreach ($list_news as $key => $value) {
        $temp++;
    ?>

        <ul>
            <li><a href=""><img src="<?php echo $list_news[$temp]['img'] ?>" alt=""></a></li>
            <div class="noidung">
                <li><a href=""><?php echo $list_news[$temp]['title'] ?></a></li>
                <li><?php echo $list_news[$temp]['content'] ?></a></li>
            </div>

        </ul>
    <?php
    }
    ?>

</div>
<!-- end content -->