<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

try{
    $response = $client ->request('GET','https://api.openweathermap.org/data/2.5/weather',[
        'query'=>[
            'q'=> 'Toulouse',
            'appid'=> 'aa08f06fab3f4c4ead05d17a4505a6db',
            'units'=>'metric',
            'lang'=>'fr'
        ]
    ]);
    // transform le json en tableau associatif
    $data = json_decode($response->getBody(), true);

    echo "Meteo à : " . $data['name'] . " : " . $data['weather'][0]['description'] . "<br>";
    echo "Temperature : " . $data['main']['temp'] . " °C <br>";
    echo "Humidité : " . $data['main']['humidity'] . "% <br>";
 
}catch(Exception $e) {
    echo $e->getMessage();
}

?>