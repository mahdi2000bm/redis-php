<?php
require __DIR__ . "/vendor/autoload.php";

try {
    $client = new Predis\Client();

}catch (Exception $e) {
    var_dump($e->getMessage());die();
}

$client->incr('view');
echo $client->get('view');


