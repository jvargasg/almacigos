<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contado
 *
 * @ORM\Table(name="contado")
 * @ORM\Entity
 */
class Contado
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
     * @ORM\Column(name="iva", type="integer")
     */
    private $iva;

    /**
     * @var integer
     *
     * @ORM\Column(name="porcentaje_del_total", type="integer")
     */
    private $porcentajeDelTotal;

    /**
     * @ORM\OneToOne(targetEntity="CondicionVenta", inversedBy="contado")
     * @ORM\JoinColumn(name="condicionventa_id", referencedColumnName="id")
     */
    private $condicionVenta;


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
     * Set iva
     *
     * @param integer $iva
     * @return Contado
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return integer 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set porcentajeDelTotal
     *
     * @param integer $porcentajeDelTotal
     * @return Contado
     */
    public function setPorcentajeDelTotal($porcentajeDelTotal)
    {
        $this->porcentajeDelTotal = $porcentajeDelTotal;

        return $this;
    }

    /**
     * Get porcentajeDelTotal
     *
     * @return integer 
     */
    public function getPorcentajeDelTotal()
    {
        return $this->porcentajeDelTotal;
    }

    /**
     * Set condicionVenta
     *
     * @param \Almacigos\VentaBundle\Entity\CondicionVenta $condicionVenta
     * @return Contado
     */
    public function setCondicionVenta(\Almacigos\VentaBundle\Entity\CondicionVenta $condicionVenta = null)
    {
        $this->condicionVenta = $condicionVenta;

        return $this;
    }

    /**
     * Get condicionVenta
     *
     * @return \Almacigos\VentaBundle\Entity\CondicionVenta 
     */
    public function getCondicionVenta()
    {
        return $this->condicionVenta;
    }
}
