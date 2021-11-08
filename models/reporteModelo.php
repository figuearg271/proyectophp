<?php
    class ReporteModelo extends Model{       

        public function __construct(){
            parent::__construct();
        }

        public function reporteAreas(){
            $arreglo = [];
            $sql = "select a.codigoArea, a.nombre as area, s.nombre as sucursal, a.telefono as telarea
                     from area a inner join sucursal s on s.codigoSucursal = a.codigoSucursal 
                     order by a.nombre asc
            ";
            $datos = $this->getDb()->conectar()->query($sql);
            while($fila = $datos->fetch_object()){
                $arreglo[] = json_decode(json_encode($fila),true);
            }
            return $arreglo;
        }

        public function reporteEmpleados($valor){
            $arreglo = [];
            if($valor!=""): $where = 'WHERE e.codigoEmpleado='.$valor;  else:  $where = ''; endif;
            $sql = "select e.codigoEmpleado, e.nombre, a.nombre as area, s.nombre as sucursal,
             e.sueldoBase, ((e.sueldoBase*0.07-e.sueldoBase*0.10-e.sueldoBase*0.0925)+ e.sueldoBase)as sueldoFinal 
            from empleado e inner join area a on a.codigoArea = e.codigoArea 
            inner join sucursal s on s.codigoSucursal = a.codigoSucursal ".$where." order by e.nombre asc" ;
            $datos = $this->getDb()->conectar()->query($sql);
            while($fila = $datos->fetch_object()){
                $arreglo[] = json_decode(json_encode($fila),true);
            }
            return $arreglo;
        }
    }
?>