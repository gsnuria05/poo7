<?php

class Empleado
{
	private $nombre;
    private $sueldo;

    //Función comparación de sueldos        

    public function mayorSueldo ($s1,$s2)
    {
        if ($s1>$s2)
        {
            return "Empleado 1 tiene mayor sueldo que Empleado 2 ";
        }
        elseif ($s2>$s1)
        {
            return "Empleado 2 tiene mayor sueldo que Empleado 1";
        }
        else
        {
            return "Empleado 1 tiene el mismo sueldo que Empleado 2 ";
        }
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
	 */
	public function setNombre($nombre): self
	{
		$this->nombre = $nombre;

		return $this;
	}

    /**
     * Get the value of sueldo
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo($sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }
}

?>