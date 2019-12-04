<?php
//Llamada al modelo
require_once("models/animals_model.php");
$animals=new animals_model();
$datos=$animals->get_animals();
 
//Llamada a la vista
$request_uri = $_SERVER['REQUEST_URI'];

echo $request_uri . "<br/><br/>";

/*$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);

echo $uri_parts[1];*/

if ($_GET['action'] == 'animals'){
    require_once("views/animals_view.phtml");
}

?>
