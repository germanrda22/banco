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
                $usuario->setDni($_POST['dni']);
                $usuario->setPassword($_POST['password']);
                $datos = $usuario->identificar();
                
                if($datos && is_array($datos))
                {
                    if($datos['rol'] == 'admin')
                    {
                        $_SESSION['admin'] = $datos;
                    }elseif($datos['rol'] == 'usuario')
                    {
                        $_SESSION['usuario'] = $datos;
                    }else
                    {
                        echo "El usuario registrado no tiene un rol correcto";
                    }
                }else
                {
                    echo "Identificación fallida";
                }
            }
            header('Location: '.base_url);
        }
    }