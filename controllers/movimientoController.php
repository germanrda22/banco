<?php
    namespace Controllers;
    use Repository\MovimientoRepository;

    class MovimientoController
    {
        public function cinco()
        {
            $movimiento = new MovimientoRepository();
            $dniUsuario = $_SESSION['usuario']['dni'];
            $movimiento->setDni_usuario($dniUsuario);
            $movimiento->muestraTodas();
            require_once 'views/movimiento/muestraCinco.php';
        }

        public function muestraTodos()
        {
            $movimiento = new MovimientoRepository();
            $dniUsuario = $_SESSION['usuario']['dni'];
            $movimiento->setDni_usuario($dniUsuario);
            $movimiento->muestraTodas();
            require_once 'views/movimiento/muestraTodos.php';
        }

        public function creaMovimiento()
        {
            require_once 'views/movimiento/crear.php';
        }

        public function insertar()
        {
            
        }
    }