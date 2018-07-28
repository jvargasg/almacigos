<?php

namespace Almacigos\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DocumentoRespaldo
 *
 * @ORM\Table(name="documentorespaldo")
 * @ORM\Entity
 */
class DocumentoRespaldo
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1000)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Credito", mappedBy="documentosRespaldo", cascade={"persist", "remove"})
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
     * Set nombre
     *
     * @param string $nombre
     * @return DocumentoRespaldo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return DocumentoRespaldo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->credito = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add credito
     *
     * @param \Almacigos\VentaBundle\Entity\Credito $credito
     * @return DocumentoRespaldo
     */
    public function addCredito(\Almacigos\VentaBundle\Entity\Credito $credito)
    {
        $this->credito[] = $credito;

        return $this;
    }

    /**
     * Remove credito
     *
     * @param \Almacigos\VentaBundle\Entity\Credito $credito
     */
    public function removeCredito(\Almacigos\VentaBundle\Entity\Credito $credito)
    {
        $this->credito->removeElement($credito);
    }

    /**
     * Get credito
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCredito()
    {
        return $this->credito;
    }
}
