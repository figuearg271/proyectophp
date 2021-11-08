<?php
    class GraficosModelo extends Model{
        public function __construct(){
            parent::__construct();
        }

        public function graficoLinea(){
            $arreglo = [];
            $sql = "select a.nombre as area, count(e.codigoEmpleado) as empleados from empleado e 
            inner join area a on a.codigoArea = e.codigoArea GROUP by a.codigoArea;";
            $datos = $this->getDb()->conectar()->query($sql);
            while($fila = $datos->fetch_row()){
                $arreglo [] = $fila;
            }
            return $arreglo;
        } 
    }
?>