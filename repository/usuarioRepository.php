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
                }
            }
            return $resultado;
        }
    }