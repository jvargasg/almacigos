<?php

namespace Proxies\__CG__\Almacigos\VentaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cliente extends \Almacigos\VentaBundle\Entity\Cliente implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'id', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'nombre', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'rut', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'direccion', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'telefono', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'celular', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'email', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'notaVenta', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'condicionVenta');
        }

        return array('__isInitialized__', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'id', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'nombre', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'rut', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'direccion', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'telefono', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'celular', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'email', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'notaVenta', '' . "\0" . 'Almacigos\\VentaBundle\\Entity\\Cliente' . "\0" . 'condicionVenta');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cliente $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setRut($rut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRut', array($rut));

        return parent::setRut($rut);
    }

    /**
     * {@inheritDoc}
     */
    public function getRut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRut', array());

        return parent::getRut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', array($direccion));

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', array());

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setCelular($celular)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCelular', array($celular));

        return parent::setCelular($celular);
    }

    /**
     * {@inheritDoc}
     */
    public function getCelular()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCelular', array());

        return parent::getCelular();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setCondicionVenta(\Almacigos\VentaBundle\Entity\CondicionVenta $condicionVenta = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondicionVenta', array($condicionVenta));

        return parent::setCondicionVenta($condicionVenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getCondicionVenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondicionVenta', array());

        return parent::getCondicionVenta();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotaVenta(\Almacigos\VentaBundle\Entity\NotaVenta $notaVentas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotaVenta', array($notaVentas));

        return parent::addNotaVenta($notaVentas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotaVenta(\Almacigos\VentaBundle\Entity\NotaVenta $notaVentas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotaVenta', array($notaVentas));

        return parent::removeNotaVenta($notaVentas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotaVentas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotaVentas', array());

        return parent::getNotaVentas();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotaVentum(\Almacigos\VentaBundle\Entity\NotaVenta $notaVenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotaVentum', array($notaVenta));

        return parent::addNotaVentum($notaVenta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotaVentum(\Almacigos\VentaBundle\Entity\NotaVenta $notaVenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotaVentum', array($notaVenta));

        return parent::removeNotaVentum($notaVenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotaVenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotaVenta', array());

        return parent::getNotaVenta();
    }

}
