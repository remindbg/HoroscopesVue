<?php

namespace App\Http\Controllers;

use App\Zodiac;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ZodiacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('https://aztro.sameerkumar.website/?sign='.$name .'&day=today');
        $response = $result->getBody()->getContents();
        $data = \GuzzleHttp\json_decode($response);

       return view('zodiac',compact('data'));
    }

}
