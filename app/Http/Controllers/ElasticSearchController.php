<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;

class ElasticSearchController extends Controller
{
    public function elastic()
    {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'my_index',
            'type' => 'my_type',
            'id' => 'my_id',
            'body' => ['testField' => 'abc']
        ];

        $hosts = [
            '192.168.1.1:9200',         // IP + Port
            '192.168.1.2',              // Just IP
            'mydomain.server.com:9201', // Domain + Port
            'mydomain2.server.com',     // Just Domain
            'https://localhost',        // SSL to localhost
            'https://192.168.1.3:9200'  // SSL to IP + Port
        ];
        $clientBuilder = ClientBuilder::create();   // Instantiate a new ClientBuilder
        $clientBuilder->setHosts($hosts);           // Set the hosts
        $client = $clientBuilder->build();          // Build the client object

        $response = $client->index($params);

        return $response;
    }
}
