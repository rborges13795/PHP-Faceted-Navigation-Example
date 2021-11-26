<?php
namespace App\Repository;

use GuzzleHttp\Client;

abstract class AbstractRepository
{
    protected function getUri()
    {
        return 'https://www.googleapis.com/books/v1/volumes';
    }
    
    protected function getResponse(string $url)
    {
        $client = new Client();
        $response = $client->get($url)->getBody();
        return json_decode($response, true);
    }
}