<?php
if(isset($_GET['tiktok_url'])){
    $content = file_get_contents("https://api.douyin.wtf/api?url=".$_GET['tiktok_url']);
    // print_r($content);

    $yummy = json_decode($content);
    // echo $yummy->nwm_video_url;

    header("Location: ".$yummy->video_data->nwm_video_url);

    // $res = array('nwm_video_url' => $yummy->nwm_video_url);
    
}

?>
