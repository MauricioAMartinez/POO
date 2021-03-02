<?php 

require_once('conexion.php');
require_once('Usuario.php');

$usuarioInstancia = new Usuario;

$usuarioEncontrado = $usuarioInstancia->get("mauricio3","123");

print_r($usuarioEncontrado);


?>