<?php
use GuzzleHttp\Client;
echo "Dirección del Servidor ==> ".$_SERVER["SERVER_ADDR"]."<br>";
echo "Nombre del Servidor ==> ".$_SERVER['SERVER_NAME']."<br>";
require "./vendor/autoload.php";

//Crear el cliente para llamadas al servicio
//Debes cambiar el valor de base_uri a la direcciÃ³n en donde esta tu servicio
//El valor de timeout, en este caso es para decir que despues de 5 segundos
//si el servicio no responde, se cancela el proceso.
$client = new Client([
    'base_uri' => 'http://api/get.php',
    'timeout'  => 5.0,
]);
//Hacer la llamada al metodo get, sin ningÃºn parametro
$res = $client->request('GET');
if ($res->getStatusCode() == '200') //Verifico que me retorne 200 = OK
{
  $obj = json_decode($res->getBody());
  echo $obj->nombre;
}
?>