<?php
class Registro extends DBOperations{

    private $name= $_POST['name'];
    private $username= $_POST['username'];
    private $password= $_POST['password'];
    private $email= $_POST['email']; 
     
    $this->query = "INSERT 
    INTO `ecommerce`.`usuarios` ( `nombre`, `username`, `password`, `email`) 
    VALUES ( ?, ?, ?, ?);";

    $consulta = $pdo->prepare($sql);
    $consulta->execute([$name,$username,$password,$email]);
    header('location:registro.html');


}

?>