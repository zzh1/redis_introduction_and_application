<?php

$redis = new \Redis();

$redis->connect('127.0.0.1',7200);

//list 操作
$redis->delete("list1");

$redis->lPush("list1","A");
$redis->lPush("list1","B");
$redis->lPush("list1","C");

$val = $redis->rPop("list1");
var_dump($val); 



