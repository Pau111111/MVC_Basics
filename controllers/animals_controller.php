<?php
//Llamada al modelo
require_once("models/animals_model.php");
$animals=new animals_model();
$datos=$animals->get_animals();
 
//Llamada a la vista
require_once("views/animals_view.phtml");
?>
