<?php

namespace Almacigos\SiembraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UbicacionBandeja
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UbicacionBandeja
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
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @ORM\ManyToOne(targetEntity="Bandeja", inversedBy="ubicacion")
     * @ORM\JoinColumn(name="bandeja_id", referencedColumnName="id")
     */
    private $bandeja;

    /**
     * @ORM\ManyToOne(targetEntity="TipoUbicacion", inversedBy="ubicacion")
     * @ORM\JoinColumn(name="tipoubicacion_id", referencedColumnName="id")
     */
    private $tipoUbicacion;


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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return UbicacionBandeja
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

    /**
     * Set bandeja
     *
     * @param \Almacigos\SiembraBundle\Entity\Bandeja $bandeja
     * @return UbicacionBandeja
     */
    public function setBandeja(\Almacigos\SiembraBundle\Entity\Bandeja $bandeja = null)
    {
        $this->bandeja = $bandeja;

        return $this;
    }

    /**
     * Get bandeja
     *
     * @return \Almacigos\SiembraBundle\Entity\Bandeja 
     */
    public function getBandeja()
    {
        return $this->bandeja;
    }

    /**
     * Set tipoUbicacion
     *
     * @param \Almacigos\SiembraBundle\Entity\TipoUbicacion $tipoUbicacion
     * @return UbicacionBandeja
     */
    public function setTipoUbicacion(\Almacigos\SiembraBundle\Entity\TipoUbicacion $tipoUbicacion = null)
    {
        $this->tipoUbicacion = $tipoUbicacion;

        return $this;
    }

    /**
     * Get tipoUbicacion
     *
     * @return \Almacigos\SiembraBundle\Entity\TipoUbicacion 
     */
    public function getTipoUbicacion()
    {
        return $this->tipoUbicacion;
    }
}
