<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CondicionVenta
 *
 * @ORM\Table(name="condicionventa")
 * @ORM\Entity
 */
class CondicionVenta
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
     * @ORM\Column(name="tipo", type="string", length=100)
     */
    private $tipo;

    /**
     * @ORM\OneToMany(targetEntity="NotaVenta", mappedBy="condicionVenta", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $notaVenta;

    /**
     * @ORM\OneToOne(targetEntity="Cliente", mappedBy="condicionVenta", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $cliente;

    /**
     * @ORM\OneToOne(targetEntity="Contado", mappedBy="condicionVenta", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $contado;

    /**
     * @ORM\OneToOne(targetEntity="Credito", mappedBy="condicionVenta", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $credito;


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
     * @param string $tipo
     * @return CondicionVenta
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

   

    /**
     * Set cliente
     *
     * @param \Almacigos\VentaBundle\Entity\Cliente $cliente
     * @return CondicionVenta
     */
    public function setCliente(\Almacigos\VentaBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Almacigos\VentaBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set contado
     *
     * @param \Almacigos\VentaBundle\Entity\Contado $contado
     * @return CondicionVenta
     */
    public function setContado(\Almacigos\VentaBundle\Entity\Contado $contado = null)
    {
        $this->contado = $contado;

        return $this;
    }

    /**
     * Get contado
     *
     * @return \Almacigos\VentaBundle\Entity\Contado 
     */
    public function getContado()
    {
        return $this->contado;
    }

    /**
     * Set credito
     *
     * @param \Almacigos\VentaBundle\Entity\Credito $credito
     * @return CondicionVenta
     */
    public function setCredito(\Almacigos\VentaBundle\Entity\Credito $credito = null)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return \Almacigos\VentaBundle\Entity\Credito 
     */
    public function getCredito()
    {
        return $this->credito;
    }

    public function __toString()
    {
        return $this->tipo;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notaVenta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add notaVenta
     *
     * @param \Almacigos\VentaBundle\Entity\NotaVenta $notaVenta
     * @return CondicionVenta
     */
    public function addNotaVentum(\Almacigos\VentaBundle\Entity\NotaVenta $notaVenta)
    {
        $this->notaVenta[] = $notaVenta;

        return $this;
    }

    /**
     * Remove notaVenta
     *
     * @param \Almacigos\VentaBundle\Entity\NotaVenta $notaVenta
     */
    public function removeNotaVentum(\Almacigos\VentaBundle\Entity\NotaVenta $notaVenta)
    {
        $this->notaVenta->removeElement($notaVenta);
    }

    /**
     * Get notaVenta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotaVenta()
    {
        return $this->notaVenta;
    }
}
