<?php
class Registro extends DBOperations{

    private $idBorrar = $_GET['id'];
    private $nombre=$_GET['nombre'];
    private $estado=$_GET['estado'];
     
    $this->query = "update tareas set nombre = ? , estado= ? where id = ?";
    $consulta = $pdo->prepare($sql);
    $consulta->execute([$nombre,$estado,$idBorrar]);
    redirigir
    header('location:index.php');
    


}

?>

<