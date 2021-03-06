<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity
 */
class Pedido
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
     * @ORM\Column(name="cantidad_solicitada", type="integer")
     */
    private $cantidadSolicitada;

    /**
     * @var integer
     *
     * @ORM\Column(name="neto", type="integer")
     */
    private $neto;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_despacho", type="datetime")
     */
    private $fechaDespacho;

    /**
     * @ORM\ManyToOne(targetEntity="NotaVenta", inversedBy="pedidos")
     * @ORM\JoinColumn(name="notaventa_id", referencedColumnName="id")
     */
    private $notaVenta;

    /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="pedidos")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
    private $producto;

    /**
     * @ORM\OneToMany(targetEntity="Almacigos\SiembraBundle\Entity\Siembra", mappedBy="pedido", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $siembras;

    /**
     * @ORM\ManyToOne(targetEntity="EstadoPedido", inversedBy="pedidos")
     * @ORM\JoinColumn(name="estadopedido_id", referencedColumnName="id")
     */
    private $estado;


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
     * Set neto
     *
     * @param integer $neto
     * @return Pedido
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
     * Set total
     *
     * @param integer $total
     * @return Pedido
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
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return Pedido
     */
    public function setFechaDespacho($fechaDespacho)
    {
        $this->fechaDespacho = $fechaDespacho;

        return $this;
    }

    /**
     * Get fechaDespacho
     *
     * @return \DateTime 
     */
    public function getFechaDespacho()
    {
        return $this->fechaDespacho;
    }

    /**
     * Set notaVenta
     *
     * @param \Almacigos\VentaBundle\Entity\NotaVenta $notaVenta
     * @return Pedido
     */
    public function setNotaVenta(\Almacigos\VentaBundle\Entity\NotaVenta $notaVenta = null)
    {
        $this->notaVenta = $notaVenta;

        return $this;
    }

    /**
     * Get notaVenta
     *
     * @return \Almacigos\VentaBundle\Entity\NotaVenta 
     */
    public function getNotaVenta()
    {
        return $this->notaVenta;
    }

    

    public function __toString()
    {
        return strval($this->id);
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->siembras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add siembras
     *
     * @param \Almacigos\SiembraBundle\Entity\Siembra $siembras
     * @return Pedido
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
     * Set numero
     *
     * @param integer $numero
     * @return Pedido
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
     * Set cantidadSolicitada
     *
     * @param integer $cantidadSolicitada
     * @return Pedido
     */
    public function setCantidadSolicitada($cantidadSolicitada)
    {
        $this->cantidadSolicitada = $cantidadSolicitada;

        return $this;
    }

    /**
     * Get cantidadSolicitada
     *
     * @return integer 
     */
    public function getCantidadSolicitada()
    {
        return $this->cantidadSolicitada;
    }

    /**
     * Set producto
     *
     * @param \Almacigos\VentaBundle\Entity\Producto $producto
     * @return Pedido
     */
    public function setProducto(\Almacigos\VentaBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \Almacigos\VentaBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set estado
     *
     * @param \Almacigos\VentaBundle\Entity\EstadoPedido $estado
     * @return Pedido
     */
    public function setEstado(\Almacigos\VentaBundle\Entity\EstadoPedido $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \Almacigos\VentaBundle\Entity\EstadoPedido 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
