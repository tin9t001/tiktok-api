<?php
if(isset($_GET['tiktok_url'])){
    $content = file_get_contents("https://api.douyin.wtf/api?url=".$_GET['tiktok_url']);
    // print_r($content);

    $yummy = json_decode($content);
    print_r($yummy->nwm_video_url);\
    
}

?>
