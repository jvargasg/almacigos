<?php

namespace Almacigos\SiembraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TipoUbicacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipoUbicacion
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="UbicacionBandeja", mappedBy="tipoUbicacion", cascade={"persist", "remove"})
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
     * Set nombre
     *
     * @param string $nombre
     * @return TipoUbicacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoUbicacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ubicacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ubicacion
     *
     * @param \Almacigos\SiembraBundle\Entity\UbicacionBandeja $ubicacion
     * @return TipoUbicacion
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

    public function __toString()
    {
        return $this->nombre;
    }
}
