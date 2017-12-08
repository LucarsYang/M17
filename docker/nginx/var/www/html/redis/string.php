<?php
// instance
$redis = new \Redis();
$redis->connect('redis', 7006);

$redisKey = 'foo';

// set
$set = $redis->set($redisKey, 123);

// increment
$incr = $redis->incr($redisKey);

// get
$get = $redis->get($redisKey);

// exists
$exists = $redis->exists($redisKey);

// delete
$delete = $redis->del($redisKey);

var_dump($set);
var_dump($incr);
var_dump($get);
var_dump($exists);
var_dump($delete);