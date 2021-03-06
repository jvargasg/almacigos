<?php

namespace Almacigos\SiembraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Siembra
 *
 * @ORM\Table(name="siembra")
 * @ORM\Entity
 */
class Siembra
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
     * @ORM\Column(name="siembra", type="bigint")
     */
    private $siembra;

    /**
     * @var integer
     *
     * @ORM\Column(name="dias", type="integer")
     */
    private $dias;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_bandejas", type="integer")
     */
    private $cantidadBandejas;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_sembrar", type="integer")
     */
    private $cantidadSembrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_esperada", type="integer")
     */
    private $cantidadEsperada;

    /**
     * @ORM\ManyToOne(targetEntity="Almacigos\VentaBundle\Entity\Pedido", inversedBy="siembras")
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     */
    private $pedido;

    /**
     * @ORM\ManyToOne(targetEntity="Bandeja", inversedBy="siembras")
     * @ORM\JoinColumn(name="bandeja_id", referencedColumnName="id")
     */
    private $bandeja;

    /*
     * AGREGAR AGRICULTOR, ASOCIADO A TRABAJADOR
     */    


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
     * Set siembra
     *
     * @param integer $siembra
     * @return Siembra
     */
    public function setSiembra($siembra)
    {
        $this->siembra = $siembra;

        return $this;
    }

    /**
     * Get siembra
     *
     * @return integer 
     */
    public function getSiembra()
    {
        return $this->siembra;
    }

    /**
     * Set dias
     *
     * @param integer $dias
     * @return Siembra
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
     * Set cantidadBandejas
     *
     * @param integer $cantidadBandejas
     * @return Siembra
     */
    public function setCantidadBandejas($cantidadBandejas)
    {
        $this->cantidadBandejas = $cantidadBandejas;

        return $this;
    }

    /**
     * Get cantidadBandejas
     *
     * @return integer 
     */
    public function getCantidadBandejas()
    {
        return $this->cantidadBandejas;
    }

    /**
     * Set cantidadSembrar
     *
     * @param integer $cantidadSembrar
     * @return Siembra
     */
    public function setCantidadSembrar($cantidadSembrar)
    {
        $this->cantidadSembrar = $cantidadSembrar;

        return $this;
    }

    /**
     * Get cantidadSembrar
     *
     * @return integer 
     */
    public function getCantidadSembrar()
    {
        return $this->cantidadSembrar;
    }

    /**
     * Set pedido
     *
     * @param \Almacigos\VentaBundle\Entity\Pedido $pedido
     * @return Siembra
     */
    public function setPedido(\Almacigos\VentaBundle\Entity\Pedido $pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \Almacigos\VentaBundle\Entity\Pedido 
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set cantidadEsperada
     *
     * @param integer $cantidadEsperada
     * @return Siembra
     */
    public function setCantidadEsperada($cantidadEsperada)
    {
        $this->cantidadEsperada = $cantidadEsperada;

        return $this;
    }

    /**
     * Get cantidadEsperada
     *
     * @return integer 
     */
    public function getCantidadEsperada()
    {
        return $this->cantidadEsperada;
    }

    /**
     * Set bandeja
     *
     * @param \Almacigos\SiembraBundle\Entity\Bandeja $bandeja
     * @return Siembra
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
}
