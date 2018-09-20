<?php

$redis = new \Redis();

$redis->connect('127.0.0.1',7200);

$redis->delete("driver1");
$redis->hSet("driver1","name","mingming");
$redis->hSet("driver1","age",25);
$redis->hSet("driver1","gender",1);
$val = $redis->hGet("driver1",'name');
var_dump($val);

$val = $redis->hMGet("driver1",array("name","age"));
var_dump($val);




