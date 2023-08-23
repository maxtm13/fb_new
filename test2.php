<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test2");
?>

<?php

$my_arr = array( 0 => 'ноль',
    1 => 'один');

$my_arr[2] = 'два';
$my_arr[3] = 'три';
$my_arr[] = ["шесть"=>'четыре'];
$my_arr[] = ["шесть"=>'29'];
$my_arr[] = ["шесть",'29'];
$my_arr[] = ["шесть" => '8888'];
$my_arr2["шесть"][] = '8888';
$my_arr2["шесть"][] = '555';
//print_r($my_arr);
print_r($my_arr2);
//print_r($my_arr[4]["шесть"]);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>