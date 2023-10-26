<?php


/**
 * Usuario
 */
class Usuario
{
    private $idusuario;
    private $nombre;
    private $email;
    private $username;
    private $rol;
    private $clave;

    public function __construct($idusuario, $nombre, $email, $username, $clave) {
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->username = $username;
        $this->clave = $clave;
    }

    public function getId()
    {
        return $this->idusuario;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
        return $this;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;
        return $this;
    }

    public function getclave()
    {
        return $this->clave;
    }
 
    public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }
}

