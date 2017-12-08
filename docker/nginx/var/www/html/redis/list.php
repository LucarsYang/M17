<?php
// instance
$redis = new \Redis();
$redis->connect('redis', 7006);

// redis key
$redisKey = 'redisKey';

// del
$del = $redis->del($redisKey);

// lPush
$lPushKey1 = $redis->lPush($redisKey, 'key1');
$lPushKey2 = $redis->lPush($redisKey, 'key2');
$lPushKey3 = $redis->lPush($redisKey, 'key3', 'key4');

// callback
$keys = array('key5', 'key6', 'key7', 'key8', 'key9');
$lPushKey4 = call_user_func_array( array($redis, 'lPush'),
    array_merge(array($redisKey), $keys)
);

// lRange
$lRange1 = $redis->lRange($redisKey, 0, 10);

// lPop
$lPop = $redis->lPop($redisKey);

// lRange
$lRange2 = $redis->lRange($redisKey, 0, 10);

// rPop
$rPop = $redis->rPop($redisKey);

// lRange
$lRange3 = $redis->lRange($redisKey, 0, 10);

// lInsert
$lInsert = $redis->lInsert($redisKey, 6, Redis::AFTER, 'key10');

var_dump($del);
var_dump($lPushKey1);
var_dump($lPushKey2);
var_dump($lPushKey3);
var_dump($lPushKey4);
var_dump($lRange1);
var_dump($lPop);
var_dump($lRange2);
var_dump($rPop);
var_dump($lRange3);
var_dump($lInsert);