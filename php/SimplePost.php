<?php
$reginvcode = "ib781a7bcad58002a8";
$action = "reginvcodeck";

$url = 'http://gfw74.tk/register.php';
$post_data = array("reginvcode" => $reginvcode,"action" => $action);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// post数据
curl_setopt($ch, CURLOPT_POST, 1);
// post的变量
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
//打印获得的数据
print_r($output);



