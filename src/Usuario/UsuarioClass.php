<?php
namespace mas_acceso\usuario;

class UsuarioClass
{
    private $u_id;
    private $u_usuario;
    private $u_password;
    private $u_token;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->u_id;
    }

    public function setId($u_id)
    {
        $this->u_id = $u_id;
    }

    public function getUsuario()
    {
        return $this->u_usuario;
    }

    public function setUsuario($u_usuario)
    {
        $this->u_usuario = $u_usuario;
    }

    public function getPassword()
    {
        return $this->u_password;
    }

    public function setPassword($u_password)
    {
        $this->u_password = $u_password;
    }

    public function getToken()
    {
        return $this->u_token;
    }

    public function setToken($u_token)
    {
        $this->u_token = $u_token;
    }
}
