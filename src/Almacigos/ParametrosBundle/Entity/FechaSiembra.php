<?php

namespace Almacigos\ParametrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FechaSiembra
 *
 * @ORM\Table(name="fechasiembra")
 * @ORM\Entity
 */
class FechaSiembra
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
     * @var \DateTime
     *
     * @ORM\Column(name="siembra_verano", type="datetime")
     */
    private $siembraVerano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="despacho_verano", type="datetime")
     */
    private $despachoVerano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="siembra_otonio", type="datetime")
     */
    private $siembraOtonio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="despacho_otonio", type="datetime")
     */
    private $despachoOtonio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="siembra_invierno", type="datetime")
     */
    private $siembraInvierno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="despacho_invierno", type="datetime")
     */
    private $despachoInvierno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="siembra_primavera", type="datetime")
     */
    private $siembraPrimavera;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="despacho_primavera", type="datetime")
     */
    private $despachoPrimavera;


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
     * Set siembraVerano
     *
     * @param \DateTime $siembraVerano
     * @return FechaSiembra
     */
    public function setSiembraVerano($siembraVerano)
    {
        $this->siembraVerano = $siembraVerano;

        return $this;
    }

    /**
     * Get siembraVerano
     *
     * @return \DateTime 
     */
    public function getSiembraVerano()
    {
        return $this->siembraVerano;
    }

    /**
     * Set despachoVerano
     *
     * @param \DateTime $despachoVerano
     * @return FechaSiembra
     */
    public function setDespachoVerano($despachoVerano)
    {
        $this->despachoVerano = $despachoVerano;

        return $this;
    }

    /**
     * Get despachoVerano
     *
     * @return \DateTime 
     */
    public function getDespachoVerano()
    {
        return $this->despachoVerano;
    }

    /**
     * Set siembraOtonio
     *
     * @param \DateTime $siembraOtonio
     * @return FechaSiembra
     */
    public function setSiembraOtonio($siembraOtonio)
    {
        $this->siembraOtonio = $siembraOtonio;

        return $this;
    }

    /**
     * Get siembraOtonio
     *
     * @return \DateTime 
     */
    public function getSiembraOtonio()
    {
        return $this->siembraOtonio;
    }

    /**
     * Set despachoOtonio
     *
     * @param \DateTime $despachoOtonio
     * @return FechaSiembra
     */
    public function setDespachoOtonio($despachoOtonio)
    {
        $this->despachoOtonio = $despachoOtonio;

        return $this;
    }

    /**
     * Get despachoOtonio
     *
     * @return \DateTime 
     */
    public function getDespachoOtonio()
    {
        return $this->despachoOtonio;
    }

    /**
     * Set siembraInvierno
     *
     * @param \DateTime $siembraInvierno
     * @return FechaSiembra
     */
    public function setSiembraInvierno($siembraInvierno)
    {
        $this->siembraInvierno = $siembraInvierno;

        return $this;
    }

    /**
     * Get siembraInvierno
     *
     * @return \DateTime 
     */
    public function getSiembraInvierno()
    {
        return $this->siembraInvierno;
    }

    /**
     * Set despachoInvierno
     *
     * @param \DateTime $despachoInvierno
     * @return FechaSiembra
     */
    public function setDespachoInvierno($despachoInvierno)
    {
        $this->despachoInvierno = $despachoInvierno;

        return $this;
    }

    /**
     * Get despachoInvierno
     *
     * @return \DateTime 
     */
    public function getDespachoInvierno()
    {
        return $this->despachoInvierno;
    }

    /**
     * Set siembraPrimavera
     *
     * @param \DateTime $siembraPrimavera
     * @return FechaSiembra
     */
    public function setSiembraPrimavera($siembraPrimavera)
    {
        $this->siembraPrimavera = $siembraPrimavera;

        return $this;
    }

    /**
     * Get siembraPrimavera
     *
     * @return \DateTime 
     */
    public function getSiembraPrimavera()
    {
        return $this->siembraPrimavera;
    }

    /**
     * Set despachoPrimavera
     *
     * @param \DateTime $despachoPrimavera
     * @return FechaSiembra
     */
    public function setDespachoPrimavera($despachoPrimavera)
    {
        $this->despachoPrimavera = $despachoPrimavera;

        return $this;
    }

    /**
     * Get despachoPrimavera
     *
     * @return \DateTime 
     */
    public function getDespachoPrimavera()
    {
        return $this->despachoPrimavera;
    }
}
