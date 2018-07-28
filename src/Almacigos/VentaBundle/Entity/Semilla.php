<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Semilla
 *
 * @ORM\Table(name="semilla")
 * @ORM\Entity
 */
class Semilla
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
     * @ORM\Column(name="codigo", type="string", length=20)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="germinacion_estimada", type="integer")
     */
    private $germinacionEstimada;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor_semilla", type="integer")
     */
    private $valorSemilla;

    /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="semillas")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
    private $producto;

    /**
     * @var string
     *
     * @ORM\Column(name="propia", type="string", length=2)
     */
    private $propia;



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
     * Set codigo
     *
     * @param string $codigo
     * @return Semilla
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set germinacionEstimada
     *
     * @param integer $germinacionEstimada
     * @return Semilla
     */
    public function setGerminacionEstimada($germinacionEstimada)
    {
        $this->germinacionEstimada = $germinacionEstimada;

        return $this;
    }

    /**
     * Get germinacionEstimada
     *
     * @return integer 
     */
    public function getGerminacionEstimada()
    {
        return $this->germinacionEstimada;
    }

    /**
     * Set valorSemilla
     *
     * @param integer $valorSemilla
     * @return Semilla
     */
    public function setValorSemilla($valorSemilla)
    {
        $this->valorSemilla = $valorSemilla;

        return $this;
    }

    /**
     * Get valorSemilla
     *
     * @return integer 
     */
    public function getValorSemilla()
    {
        return $this->valorSemilla;
    }

    /**
     * Set producto
     *
     * @param \Almacigos\VentaBundle\Entity\Producto $producto
     * @return Semilla
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Semilla
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
     * Set propia
     *
     * @param string $propia
     * @return Semilla
     */
    public function setPropia($propia)
    {
        $this->propia = $propia;

        return $this;
    }

    /**
     * Get propia
     *
     * @return string 
     */
    public function getPropia()
    {
        return $this->propia;
    }

    public function __toString()
    {
        return $this->codigo;
    }
}
