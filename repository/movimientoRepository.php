<?php
    namespace Repository;

    use Models\Movimiento;
    use Lib\DataBase;
    use PDO;

    class MovimientoRepository extends Movimiento
    {
        private $db;
        public function __construct()
        {
            $this->db = new DataBase();
        }

        public function muestraTodas()
        {
            $dniUsuario = $this->getDni_usuario();
            $resultado = false;
            $sql = "SELECT * FROM movimiento WHERE dni_usuario = :dni_usuario ORDER BY fecha DESC";
            $muestraTodas = $this->db->prepare($sql);
            $muestraTodas->bindParam(':dni_usuario', $dniUsuario, PDO::PARAM_STR);
            $muestraTodas->execute();
            if($muestraTodas)
            {
                $resultado = $muestraTodas->fetch(PDO::FETCH_OBJ);
                var_dump($resultado);
            }
            return $resultado;
        }
    }