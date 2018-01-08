<?php

require __DIR__ . '/vendor/autoload.php';

use JsonRpc\Client;

$client = new Client('http://localhost:8080/foo1/server.php');

$client->call('add', [40, 3]);
var_dump($client->result);
var_dump($client->error);

$client->call('subtract', [40, 3]);
var_dump($client->result);
var_dump($client->error);
