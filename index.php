<?php
if(isset($_GET['tiktok_url'])){
    $content =     file_get_contents("https://tin9-tiktok-api.herokuapp.com/?tiktok_url=".$_GET['tiktok_url']);
    
    var_export(json_decode($content);

   
}
?>
