<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WelcomeController extends Controller
{
    public function bienvenido()
    {
        $client = new Client(['base_uri' => 'http://laboratorioweb-001-site1.ftempurl.com/']);

        $response = $client->request('GET', 'api/evento');

        $body = $response->getBody();

        $content = $body->getContents();

        $eventos = json_decode($content, TRUE);

        return view('welcome', compact('eventos'));
    }
}
