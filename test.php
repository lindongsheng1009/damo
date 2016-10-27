<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/27
 * Time: 16:55
 */
header("Access-Control-Allow-Origin:*");
$callback = $_GET['callback'];
$data = array('key' => 'value');
echo $callback.'('.json_encode($data).')';
exit;