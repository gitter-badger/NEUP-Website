<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo get_bloginfo('charset'); ?>"/>
    <title>
        <?php 
        if(is_home())
        {
            bloginfo('name');
        }
        elseif(is_category())
        {
            single_cat_title();
            echo ' - ';
            bloginfo('name');
        }
        elseif(is_search())
        {
            echo "搜索结果 - ";
            bloginfo('name');
        }
        elseif(is_404())
        {
            echo "页面不存在";
        }
        else{
            wp_title('',true);
        }
        ?>
    </title>
    <?php wp_head();?>
</head>