<?php
    namespace Models;

    class Movimiento
    {
        private $id;
        private $dni_usuario;
        private $cantidad;
        private $fecha;
        private $concepto;

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of dni_usuario
         */ 
        public function getDni_usuario()
        {
                return $this->dni_usuario;
        }

        /**
         * Set the value of dni_usuario
         *
         * @return  self
         */ 
        public function setDni_usuario($dni_usuario)
        {
                $this->dni_usuario = $dni_usuario;

                return $this;
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of concepto
         */ 
        public function getConcepto()
        {
                return $this->concepto;
        }

        /**
         * Set the value of concepto
         *
         * @return  self
         */ 
        public function setConcepto($concepto)
        {
                $this->concepto = $concepto;

                return $this;
        }
    }