<?php
class EmpleadoModelo extends Model
{
    private $codigoEmpleado;
    private $nombre;
    private $edad;
    private $sueldoBase;
    private $codigoArea;

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
        $estado = 1;
        $sql = "INSERT INTO empleado 
            VALUES (" . $this->codigoEmpleado . ",'" . $this->nombre . "'," . $this->edad . ",'" . $this->sueldoBase . "',,'" . $this->codigoArea . "'," . $estado . ") ";
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

    public function listadoAreas()
    {
        $arreglo = [];
        $sql = "SELECT * FROM marca";
        $datos = $this->getDb()->conectar()->query($sql);
        while ($fila = $datos->fetch_object()) {
            $arreglo[] = json_decode(json_encode($fila), true);
        }
        return $arreglo;
    }

    public function getCodigoEmpleado()
    {
        return $this->codigoEmpleado;
    }

    public function setCodigoEmpleado($codigoEmpleado)
    {
        $this->codigoEmpleado = $codigoEmpleado;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
        return $this;
    }

    /**
     * Get the value of sueldoBase
     */
    public function getSueldoBase()
    {
        return $this->sueldoBase;
    }

    /**
     * Set the value of sueldoBase
     *
     * @return  self
     */
    public function setSueldoBase($sueldoBase)
    {
        $this->sueldoBase = $sueldoBase;
        return $this;
    }

    /**
     * Get the value of codigoArea
     */
    public function getCodigoArea()
    {
        return $this->codigoArea;
    }

    /**
     * Set the value of codigoArea
     *
     * @return  self
     */
    public function setCodigoArea($codigoArea)
    {
        $this->codigoArea = $codigoArea;
        return $this;
    }
}
