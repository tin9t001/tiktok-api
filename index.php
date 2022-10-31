<?php
if(isset($_GET['tiktok_url'])){
    $content =     file_get_contents("https://api.douyin.wtf/api?url=".$_GET['tiktok_url']);
 
 $result  = json_decode($content);
 echo print_r($result);
}
?>
