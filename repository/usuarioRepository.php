<?php
    namespace Repository;
    use Models\Usuario;
    use Lib\DataBase;
    use PDO;

    class UsuarioRepository extends Usuario
    {
        private $db;
        public function __construct()
        {
            $this->db = new DataBase();
        }

        public function identificar()
        {
            $dni = $this->getDni();
            $password = $this->getPassword();
            $resultado = false;
            $sql = "SELECT * FROM usuario WHERE dni = :dni";
            $inicio = $this->db->prepare($sql);
            $inicio->bindParam(':dni', $dni, PDO::PARAM_STR);
            $inicio->execute();
            if($inicio)
            {
                $datos = $inicio->fetch(PDO::FETCH_ASSOC);
                if($password == $datos['password'])
                {
                    $resultado = $datos;
                }else
                {
                    $resultado = "Usuario o contraseña incorrectos";
                }
            }
            return $resultado;
        }

        public function sacaUsuarios()
        {
            $sql = "SELECT * FROM usuario WHERE rol = 'usuario'";
            $usuario = $this->db->prepare($sql);
            $usuario->execute();
            if($usuario)
            {
                $usuarios = $usuario->fetchAll(PDO::FETCH_ASSOC);
            }
            return $usuarios;
        }

        public function sacaAdministradores()
        {
            $sql = "SELECT * FROM usuario WHERE rol = 'admin'";
            $usuario = $this->db->prepare($sql);
            $usuario->execute();
            if($usuario)
            {
                $administradores = $usuario->fetchAll(PDO::FETCH_ASSOC);
            }
            return $administradores;
        }

        public function borra()
        {
            $dni = $this->getDni();
            $sql = "DELETE FROM usuario WHERE dni = :dni";
            $usuario = $this->db->prepare($sql);
            $usuario->bindParam(':dni', $dni, PDO::PARAM_STR);
            $usuario->execute();
            if($usuario)
            {
                $resultado = "Borrado con éxito";
            }
            return $resultado;
        }
    }