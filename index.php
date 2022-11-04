<?php
if(isset($_GET['tiktok_url'])){
    $content = file_get_contents("https://api.douyin.wtf/api?url=".$_GET['tiktok_url']);
    // print_r($content);

    print_r(json_encode($content));
    
}

?>
