<?php

namespace Almacigos\SiembraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bandeja
 *
 * @ORM\Table(name="bandeja")
 * @ORM\Entity
 */
class Bandeja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @ORM\OneToMany(targetEntity="Siembra", mappedBy="bandeja", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $siembras;

    /**
     * @ORM\OneToMany(targetEntity="UbicacionBandeja", mappedBy="bandeja", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $ubicacion;

    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Bandeja
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Bandeja
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function __toString()
    {
        return (string)$this->tipo;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->siembras = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ubicacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add siembras
     *
     * @param \Almacigos\SiembraBundle\Entity\Siembra $siembras
     * @return Bandeja
     */
    public function addSiembra(\Almacigos\SiembraBundle\Entity\Siembra $siembras)
    {
        $this->siembras[] = $siembras;

        return $this;
    }

    /**
     * Remove siembras
     *
     * @param \Almacigos\SiembraBundle\Entity\Siembra $siembras
     */
    public function removeSiembra(\Almacigos\SiembraBundle\Entity\Siembra $siembras)
    {
        $this->siembras->removeElement($siembras);
    }

    /**
     * Get siembras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSiembras()
    {
        return $this->siembras;
    }

    /**
     * Add ubicacion
     *
     * @param \Almacigos\SiembraBundle\Entity\UbicacionBandeja $ubicacion
     * @return Bandeja
     */
    public function addUbicacion(\Almacigos\SiembraBundle\Entity\UbicacionBandeja $ubicacion)
    {
        $this->ubicacion[] = $ubicacion;

        return $this;
    }

    /**
     * Remove ubicacion
     *
     * @param \Almacigos\SiembraBundle\Entity\UbicacionBandeja $ubicacion
     */
    public function removeUbicacion(\Almacigos\SiembraBundle\Entity\UbicacionBandeja $ubicacion)
    {
        $this->ubicacion->removeElement($ubicacion);
    }

    /**
     * Get ubicacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }
}
