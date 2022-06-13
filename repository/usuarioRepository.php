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
            echo "has entrado en identificar";
            $dni = $this->getDni();
            $password = $this->getPassword();
            $resultado = false;
            $sql = "SELECT * FROM usuario WHERE dni = :dni";
            $inicio = $this->db->prepare($sql);
            $inicio->bindParam(':dni', $dni, PDO::PARAM_STR);
            $inicio->execute();
            var_dump($inicio);
            echo "Has llegado al final de identificar";
        }
    }