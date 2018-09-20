<?php

$redis = new \Redis();

$redis->connect("127.0.0.1",7200);

//set 
$redis->delete("set");

$redis->sAdd("set1","A");
$redis->sAdd("set1","B");
$redis->sAdd("set1","C");
$redis->sAdd("set1","C");

$val = $redis->sCard("set1");
var_dump($val);  //3

$val = $redis->sMembers("set1");
var_dump($val); //array()



