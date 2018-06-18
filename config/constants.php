<?php
$temp = explode(":", $_SERVER['HTTP_HOST']);
$url="http://".$temp[0]."/travel/trunk/public/images/";
return [
 'myConstant' => [
	'weburlpart' => $url,
 ]
];