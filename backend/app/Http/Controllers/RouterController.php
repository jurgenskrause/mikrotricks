<?php

namespace App\Http\Controllers;

use PEAR2\Net\RouterOS\Client;
use PEAR2\Net\RouterOS\Exception as PEARException;
use PEAR2\Net\RouterOS\Request as PEARRequest;
use PEAR2\Net\RouterOS\Response as PEARResponse;

class RouterController extends Controller
{
    public function connect()
    {
        try {
            $client = new Client(env('ROUTER_HOST'), env('ROUTER_USER'), env('ROUTER_PASS'));
        } catch (PEARException $e) {
            die('Unable to connect to the router.');
        }

        $responses = $client->sendSync(new PEARRequest('/ip/arp/print'));

        foreach ($responses as $response) {
            if ($response->getType() === PEARResponse::TYPE_DATA) {
                echo 'IP: ', $response->getProperty('address'),
                ' MAC: ', $response->getProperty('mac-address'),
                "\n";
            }
        }
    }
}
