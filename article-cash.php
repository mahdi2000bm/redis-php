<?php
require __DIR__ . "/vendor/autoload.php";

function profileCash($key, $expire, $data) {

    $client = new Predis\Client();

    if ($client->exists($key)){

        $data = $client->get($key);
        return unserialize($data);

    }


    $client->setex($key,$expire, serialize($data));
    return $data;

}

$arr = [
    "current_users" => [
        "mehdi",
        "09120292021",
        "mhdibaqri",
    ],
    "articles" => [
        "xauusd",
        "cars"
    ]
];

$arr = "lurem ipsom;";

$body = profileCash("profile", 20, $arr);
print_r($body);