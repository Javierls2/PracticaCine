<?php
include "app/controlador/ControladorFormulario.php";
$datos = array(
    'nombre' => '',
    'contrasenia' => '',
    'correo' => ''
);

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controlador = new ControladorFormulario($_POST);
    $datos = $controlador->validar();
}

include "app/vista/formulario.php";