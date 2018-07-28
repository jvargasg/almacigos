<?php

namespace Almacigos\ParametrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Iva
 *
 * @ORM\Table(name="iva")
 * @ORM\Entity
 */
class Iva
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
     * @return Iva
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
}
