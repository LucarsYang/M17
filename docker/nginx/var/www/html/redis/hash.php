<?php
// instance
$redis = new \Redis();
$redis->connect('redis', 7006);

// redis key
$redisKey = 'user:1';

// hash key value
$hashValue = array(
    'name' => 'lucars',
    'age' => 18
);

// delete
$del = $redis->del($redisKey);

// set hash key
$hMset = $redis->hMset($redisKey, $hashValue);

// add hash key
$hIncrBy = $redis->hIncrBy($redisKey, 'money', 999999);

// set another hash keyG
$hSet = $redis->hSet($redisKey, 'gender', 'Man');

// exists
$exists = $redis->exists($redisKey);

// get specific hash key
$hashKey = array('name', 'money', 'age');
$hMGet = $redis->hMGet($redisKey, $hashKey);

// get all hash key value
$hGetAll = $redis->hGetAll($redisKey);

// delete hash key
$hDel = $redis->hDel($redisKey, 'age', 'gender');

// show data after delete hash key
var_dump($redis->hGetAll($redisKey));

var_dump($del);
var_dump($hMset);
var_dump($hIncrBy);
var_dump($hSet);
var_dump($exists);
var_dump($hMGet);
var_dump($hGetAll);
var_dump($hDel);