<?php
require_once __DIR__ .'/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://localhost:8000/');

$html = $response->getBody()->getContents();

$file = fopen('static/index.html', 'a');
fwrite($file, $html);
fclose($file);

exit();
