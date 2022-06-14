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
                    }
                }else
                {
                    echo $datos;
                }
            }
            header('Location: '.base_url);
        }

        public function logout()
        {
            session_destroy();
            header('Location: '.base_url);
        }

        public function muestraUsuarios()
        {
            $usuario = new UsuarioRepository();
            $usuarios = $usuario->sacaUsuarios();
            require_once 'views/admin/usuarios.php';
        }
        
        public function muestraAdministradores()
        {
            $usuario = new UsuarioRepository();
            $administradores = $usuario->sacaAdministradores();
            require_once 'views/admin/administradores.php';
        }

        public function borrar()
        {
            if($_GET['dni'])
            {
                $usuario = new UsuarioRepository();
                $usuario->setDni($_GET['dni']);
                $mensaje = $usuario->borra();
                echo "<div>";
                echo $mensaje;
                echo "<a href=" . base_url . ">Volver a inicio</a>";
                echo "</div>";
            }
        }

        public function crear()
        {
            require_once 'views/admin/crearUsuario.php';
        }

        public function generaUsuario()
        {
            if(isset($_POST))
            {
                $usuario = new UsuarioRepository();
                $usuario->setDni($_POST['dni']);
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellidos($_POST['apellidos']);
                $usuario->setTelefono($_POST['telefono']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                $usuario->setRol($_POST['rol']);
                if($_POST['saldo'] == '')
                {
                    $usuario->setSaldo(NULL);
                }else
                {
                    $usuario->setSaldo($_POST['saldo']);
                }
                $nuevo_usuario = $usuario->generar();
                echo "<div>";
                echo $nuevo_usuario;
                echo "<a href=" . base_url . ">Volver a inicio</a>";
                echo "</div>";
            }
        }
    }