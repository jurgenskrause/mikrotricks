<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pear2\src\PEAR2\Net\RouterOS;

class RouterController extends Controller
{
    public function connect()
    {
        try {
            $client = new RouterOS\Client('192.168.88.1', 'admin', 'password');
        } catch (Exception $e) {
            die('Unable to connect to the router.');
        }
        
        $responses = $client->sendSync(new RouterOS\Request('/ip/arp/print'));
        
        foreach ($responses as $response) {
            if ($response->getType() === RouterOS\Response::TYPE_DATA) {
                echo 'IP: ', $response->getProperty('address'),
                ' MAC: ', $response->getProperty('mac-address'),
                "\n";
            }
        }
    }
}
