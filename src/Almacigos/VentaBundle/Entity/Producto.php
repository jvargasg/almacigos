<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto
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
     * @ORM\Column(name="especie", type="string", length=255)
     */
    private $especie;

    /**
     * @var string
     *
     * @ORM\Column(name="variedad", type="string", length=255)
     */
    private $variedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio_neto", type="integer")
     */
    private $precioNeto;

    /**
     * @ORM\OneToMany(targetEntity="Pedido", mappedBy="producto", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $pedidos;

    /**
     * @ORM\OneToMany(targetEntity="Semilla", mappedBy="producto", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $semillas;


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
     * Set especie
     *
     * @param string $especie
     * @return Producto
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return string 
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set variedad
     *
     * @param string $variedad
     * @return Producto
     */
    public function setVariedad($variedad)
    {
        $this->variedad = $variedad;

        return $this;
    }

    /**
     * Get variedad
     *
     * @return string 
     */
    public function getVariedad()
    {
        return $this->variedad;
    }

    /**
     * Set precioNeto
     *
     * @param integer $precioNeto
     * @return Producto
     */
    public function setPrecioNeto($precioNeto)
    {
        $this->precioNeto = $precioNeto;

        return $this;
    }

    /**
     * Get precioNeto
     *
     * @return integer 
     */
    public function getPrecioNeto()
    {
        return $this->precioNeto;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->semillas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
    /**
     * Add semillas
     *
     * @param \Almacigos\VentaBundle\Entity\Semilla $semillas
     * @return Producto
     */
    public function addSemilla(\Almacigos\VentaBundle\Entity\Semilla $semillas)
    {
        $this->semillas[] = $semillas;

        return $this;
    }

    /**
     * Remove semillas
     *
     * @param \Almacigos\VentaBundle\Entity\Semilla $semillas
     */
    public function removeSemilla(\Almacigos\VentaBundle\Entity\Semilla $semillas)
    {
        $this->semillas->removeElement($semillas);
    }

    /**
     * Get semillas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSemillas()
    {
        return $this->semillas;
    }

    public function __toString()
    {
        return $this->especie.' '.$this->variedad;
    }

    

    /**
     * Add pedidos
     *
     * @param \Almacigos\VentaBundle\Entity\Pedido $pedidos
     * @return Producto
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
}
