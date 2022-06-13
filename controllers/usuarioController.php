<?php
    namespace Controllers;
    use Repository\UsuarioRepository;

    class UsuarioController
    {

        public function muestraLogin()
        {
            require_once 'views/layout/main.php';
        }
        public function login()
        {
            if(isset($_POST))
            {
                $usuario = new UsuarioRepository();
                echo $_POST['dni'];
                echo $_POST['password'];
                $usuario->setDni($_POST['dni']);
                $usuario->setPassword($_POST['password']);
                $datos = $usuario->identificar();
                var_dump($datos);
            }
        }
    }