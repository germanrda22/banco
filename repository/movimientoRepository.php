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
                $resultado = $muestraTodas->fetchAll(PDO::FETCH_ASSOC);
            }
            return $resultado;
        }

        public function insertar()
        {
            $cantidad = $this->getCantidad();
            $concepto = $this->getConcepto();
            $fecha = $this->getFecha();
            $dni_usuario = $_SESSION['usuario']['dni'];
            $resultado = false;
            $sql = "INSERT INTO movimiento VALUES (NULL, :dni_usuario, :cantidad, :fecha, :concepto)";
            $insercion = $this->db->prepare($sql);
            $insercion->bindParam(':dni_usuario', $dni_usuario, PDO::PARAM_STR);
            $insercion->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
            $insercion->bindParam(':fecha', $fecha, PDO::PARAM_STR);
            $insercion->bindParam(':concepto', $concepto, PDO::PARAM_STR);
            $insercion->execute();
            if($insercion)
            {
                $resultado = "Inserción realizada con éxito";
            }
            return $resultado;
        }
    }