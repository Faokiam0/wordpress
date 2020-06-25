<?php

namespace MailPoetDoctrineProxies\__CG__\MailPoet\Entities;

if (!defined('ABSPATH')) exit;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class NewsletterTemplateEntity extends \MailPoet\Entities\NewsletterTemplateEntity implements \MailPoetVendor\Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'newsletter', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'name', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'categories', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'body', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'thumbnail', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'readonly', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'newsletter', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'name', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'categories', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'body', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'thumbnail', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'readonly', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterTemplateEntity' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (NewsletterTemplateEntity $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getNewsletter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletter', []);

        return parent::getNewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsletter($newsletter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsletter', [$newsletter]);

        return parent::setNewsletter($newsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories(string $categories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        return parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnail', []);

        return parent::getThumbnail();
    }

    /**
     * {@inheritDoc}
     */
    public function setThumbnail($thumbnail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThumbnail', [$thumbnail]);

        return parent::setThumbnail($thumbnail);
    }

    /**
     * {@inheritDoc}
     */
    public function getReadonly(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReadonly', []);

        return parent::getReadonly();
    }

    /**
     * {@inheritDoc}
     */
    public function setReadonly(bool $readonly)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReadonly', [$readonly]);

        return parent::setReadonly($readonly);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

}
