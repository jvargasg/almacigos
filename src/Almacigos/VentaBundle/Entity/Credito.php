<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Credito
 *
 * @ORM\Table(name="credito")
 * @ORM\Entity
 */
class Credito
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
     * @ORM\Column(name="dias", type="integer")
     */
    private $dias;

    /**
     * @ORM\OneToOne(targetEntity="CondicionVenta", inversedBy="credito")
     * @ORM\JoinColumn(name="condicionventa_id", referencedColumnName="id")
     */
    private $condicionVenta;

    /**
     * @ORM\ManyToOne(targetEntity="DocumentoRespaldo", inversedBy="credito")
     * @ORM\JoinColumn(name="documentorespaldo_id", referencedColumnName="id")
     */
    private $documentosRespaldo;


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
     * Set dias
     *
     * @param integer $dias
     * @return Credito
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set condicionVenta
     *
     * @param \Almacigos\VentaBundle\Entity\CondicionVenta $condicionVenta
     * @return Credito
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

    /**
     * Set documentosRespaldo
     *
     * @param \Almacigos\VentaBundle\Entity\DocumentoRespaldo $documentosRespaldo
     * @return Credito
     */
    public function setDocumentosRespaldo(\Almacigos\VentaBundle\Entity\DocumentoRespaldo $documentosRespaldo = null)
    {
        $this->documentosRespaldo = $documentosRespaldo;

        return $this;
    }

    /**
     * Get documentosRespaldo
     *
     * @return \Almacigos\VentaBundle\Entity\DocumentoRespaldo 
     */
    public function getDocumentosRespaldo()
    {
        return $this->documentosRespaldo;
    }
}
