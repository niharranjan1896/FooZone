<?php
session_start();
$con=mysqli_connect("localhost","root","","ecomm");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/project/foozone/');
define('SITE_PATH','http://localhost/project/foozone/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'AdminTheme/media/product/');

define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'AdminTheme/media/product/');
?>