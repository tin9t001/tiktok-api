<?php
if(isset($_GET['tiktok_url'])){
    $content =     file_get_contents("https://api.douyin.wtf/api?url=".$_GET['tiktok_url']);
    
    $action = "GET";
    $url = $content;
    echo "Trying to reach ...";
    echo $url;
    $parameters = array("param" => "value");
    $result = CurlHelper::perform_http_request($action, $url, $parameters);
    echo print_r($result)
}
?>
