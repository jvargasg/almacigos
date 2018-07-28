<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * NotaVenta
 *
 * @ORM\Table(name="notaventa")
 * @ORM\Entity
 */
class NotaVenta
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
     * @ORM\Column(name="numero", type="bigint")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="notas", type="string", length=2000)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_despacho", type="string", length=2000)
     */
    private $datosDespacho;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_abono", type="datetime", nullable=true)
     */
    private $fechaAbono;

    /**
     * @var integer
     *
     * @ORM\Column(name="abono", type="integer", nullable=true)
     */
    private $abono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_emision", type="datetime")
     */
    private $fechaEmision;

    /**
     * @var integer
     *
     * @ORM\Column(name="neto", type="integer", nullable=true)
     */
    private $neto;

    /**
     * @var integer
     *
     * @ORM\Column(name="iva", type="integer", nullable=true)
     */
    private $iva;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="notaVenta")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $cliente;

    /**
     * @ORM\OneToMany(targetEntity="Pedido", mappedBy="notaVenta", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $pedidos;

    /**
     * @ORM\ManyToOne(targetEntity="CondicionVenta", inversedBy="notaVenta")
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
     * Set numero
     *
     * @param integer $numero
     * @return NotaVenta
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return NotaVenta
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set datosDespacho
     *
     * @param string $datosDespacho
     * @return NotaVenta
     */
    public function setDatosDespacho($datosDespacho)
    {
        $this->datosDespacho = $datosDespacho;

        return $this;
    }

    /**
     * Get datosDespacho
     *
     * @return string 
     */
    public function getDatosDespacho()
    {
        return $this->datosDespacho;
    }

    /**
     * Set fechaAbono
     *
     * @param \DateTime $fechaAbono
     * @return NotaVenta
     */
    public function setFechaAbono($fechaAbono)
    {
        $this->fechaAbono = $fechaAbono;

        return $this;
    }

    /**
     * Get fechaAbono
     *
     * @return \DateTime 
     */
    public function getFechaAbono()
    {
        return $this->fechaAbono;
    }

    /**
     * Set abono
     *
     * @param integer $abono
     * @return NotaVenta
     */
    public function setAbono($abono)
    {
        $this->abono = $abono;

        return $this;
    }

    /**
     * Get abono
     *
     * @return integer 
     */
    public function getAbono()
    {
        return $this->abono;
    }

    /**
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     * @return NotaVenta
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;

        return $this;
    }

    /**
     * Get fechaEmision
     *
     * @return \DateTime 
     */
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * Set neto
     *
     * @param integer $neto
     * @return NotaVenta
     */
    public function setNeto($neto)
    {
        $this->neto = $neto;

        return $this;
    }

    /**
     * Get neto
     *
     * @return integer 
     */
    public function getNeto()
    {
        return $this->neto;
    }

    /**
     * Set iva
     *
     * @param integer $iva
     * @return NotaVenta
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
     * Set total
     *
     * @param integer $total
     * @return NotaVenta
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pedidos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
    /**
     * Add pedidos
     *
     * @param \Almacigos\VentaBundle\Entity\Pedido $pedidos
     * @return NotaVenta
     */
    public function addPedido(\Almacigos\VentaBundle\Entity\Pedido $pedidos)
    {
        $this->pedidos[] = $pedidos;

        return $this;
    }

    /**
     * Remove pedidos
     *
     * @param \Almacigos\VentaBundle\Entity\Pedido $pedidos
     */
    public function removePedido(\Almacigos\VentaBundle\Entity\Pedido $pedidos)
    {
        $this->pedidos->removeElement($pedidos);
    }

    /**
     * Get pedidos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPedidos()
    {
        return $this->pedidos;
    }

    

    /**
     * Set cliente
     *
     * @param \Almacigos\VentaBundle\Entity\Cliente $cliente
     * @return NotaVenta
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

    public function __toString()
    {
        return $this->numero;
    }

    /**
     * Set condicionVenta
     *
     * @param \Almacigos\VentaBundle\Entity\CondicionVenta $condicionVenta
     * @return NotaVenta
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
