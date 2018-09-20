<?php

$redis = new \Redis();

$redis->connect('127.0.0.1',7200);

//string操作
$redis->delete("string1");

$redis->set("string1","val1");
$val = $redis->get("string1");
var_dump($val); // val1

$redis->set("string1",4);
$redis->incr("string1",2);
$val=$redis->get("string1");
var_dump($val); //6



