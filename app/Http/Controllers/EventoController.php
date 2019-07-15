<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EventoController extends Controller
{
    public function show(int $id)
    {
        $client = new Client(['base_uri' => 'http://laboratorioweb-001-site1.ftempurl.com/']);

        $response = $client->request('GET', 'api/evento');

        $body = $response->getBody();

        $content = $body->getContents();

        $eventos = json_decode($content, TRUE);

        foreach ($eventos as $evento) {
            if($evento['evento_id'] == $id){
                return view('evento', compact('evento'));
            }
        }

    }
}
