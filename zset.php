<?php

$redis = new \Redis();

$redis->connect('127.0.0.1',7200);

$redis->delete("zset1");

$redis->zAdd("zset1",100,"xiaoming"); //rank  2
$redis->zAdd("zset1",90,"xiaohong");//rank  0
$redis->zAdd("zset1",93,"xiaowang");//rank 1

$val = $redis->zRange("zset1",0,-1); //从低到高
var_dump($val);

$val = $redis->zRevRange("zset1",0,-1);//从高到低
var_dump($val);




