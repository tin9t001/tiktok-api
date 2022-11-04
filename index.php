<?php
if(isset($_GET['tiktok_url'])){
    $content = file_get_contents("https://api.douyin.wtf/api?url=".$_GET['tiktok_url']);

    $content = json_encode($content);

    print_r($content);
}

?>
