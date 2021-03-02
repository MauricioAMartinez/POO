<?php

class Usuario extends DBOperations
{
    
    private $nombre;
    private $username;
    private $password;
    private $email;
    private $id;

    public function get($username, $password)
    {
        $this->query = "
        SELECT  * 
        FROM usuarios 
        WHERE username = :username AND password = :password";

        $params = array('username' => $username, 'password' => $password);
        $resultado =  $this->executeQuery($params);
        return $resultado;
    }

    //tarea completar esta clase
    // consejo: usar los metodos sets para usar esa data en la creacion y actualizacion
}
?>


