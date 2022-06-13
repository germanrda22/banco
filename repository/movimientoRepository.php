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
    }