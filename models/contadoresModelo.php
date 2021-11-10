<?php
class ContadoresModelo extends Model
{
    private $idcontador;
    private $pservicio;
    private $contribuyente;
    private $estado; 

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $arreglo = [];
        $sql = "SELECT p.codigoEmpleado, p.nombre, p.edad, p.sueldoBase, a.nombre as area 
            FROM empleado p INNER JOIN area a ON a.codigoArea=p.codigoArea WHERE p.estado = 1";
        $datos = $this->getDb()->conectar()->query($sql);
        while ($fila = $datos->fetch_object()) {
            $arreglo[] = json_decode(json_encode($fila), true);
        }
        return $arreglo;
    }

    public function save()
    { 
        $sql = "INSERT INTO contador (puesto_en_servicio,id_contribuyente,estado)
            VALUES ('" . $this->pservicio . "'," . $this->contribuyente . "," . $this->estado . ") ";
        $res = $this->getDb()->conectar()->query($sql);
        return ($res === TRUE) ? true : false;
    }

    public function update()
    {
        $sql = "UPDATE empleado 
            SET 
            nombre='" . $this->nombre . "',
            edad=" . $this->edad . ", 
            sueldoBase=" . $this->sueldoBase . ",
            codigoArea=" . $this->codigoArea . "
            WHERE codigoEmpleado=" . $this->codigoEmpleado;
        $res = $this->getDb()->conectar()->query($sql);
        return ($res === TRUE) ? true : false;
    }

    public function delete()
    {
        $sql = "UPDATE empleado SET estado = 0 WHERE codigoEmpleado = " . $this->codigoEmpleado;
        $res = $this->getDb()->conectar()->query($sql);
        return ($res === TRUE) ? true : false;
    }

    public function listadoClientes()
    {
        $arreglo = [];
        $sql = "SELECT * FROM persona";
        $datos = $this->getDb()->conectar()->query($sql);
        while ($fila = $datos->fetch_object()) {
            $arreglo[] = json_decode(json_encode($fila), true);
        }
        return $arreglo;
    }

    public function getIdContador()
    {
        return $this->idcontador;
    }

    public function setIdContador($idcontador)
    {
        $this->idcontador = $idcontador;
    }
 
    public function getPServicio()
    {
        return $this->pservicio;
    }

    
    public function setPServicio($pservicio)
    {
        $this->pservicio = $pservicio;
        return $this;
    }
 
    public function getContribuyente()
    {
        return $this->contribuyente;
    }

    
    public function setContribuyente($contribuyente)
    {
        $this->contribuyente = $contribuyente;
        return $this;
    }
 
    public function getEstado()
    {
        return $this->estado;
    }

    
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
 
}
