<?php
//Controladores requeridos
require_once 'Front/Controllers/templateController.php';

//Creamos un objeto para mostrar la plantilla
$plantilla = new templateController();
$plantilla->mostrarPlantilla();
?>