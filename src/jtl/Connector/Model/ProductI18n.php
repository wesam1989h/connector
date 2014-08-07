<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage Product
 */

namespace jtl\Connector\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Locale specific texts for product.
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage Product
 */
class ProductI18n extends DataModel
{
    /**
     * @var Identity Reference to product
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $productId = null;

    /**
     * @var string Optional product description
     * @Serializer\Type("string")
     */
    protected $description = '';

    /**
     * @var string locale
     * @Serializer\Type("string")
     */
    protected $localeName = '';

    /**
     * @var string 
     * @Serializer\Type("string")
     */
    protected $metaDescription = '';

    /**
     * @var string 
     * @Serializer\Type("string")
     */
    protected $metaKeywords = '';

    /**
     * @var string Product name / title
     * @Serializer\Type("string")
     */
    protected $name = '';

    /**
     * @var string Optional product shortdescription
     * @Serializer\Type("string")
     */
    protected $shortDescription = '';

    /**
     * @var string 
     * @Serializer\Type("string")
     */
    protected $titleTag = '';

    /**
     * @var string Optional path of product URL
     * @Serializer\Type("string")
     */
    protected $urlPath = '';


    public function __construct()
    {
        $this->productId = new Identity;
    }

    /**
     * @param  Identity $productId Reference to product
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setProductId(Identity $productId)
    {
        return $this->setProperty('productId', $productId, 'Identity');
    }

    /**
     * @return Identity Reference to product
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param  string $description Optional product description
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setDescription($description)
    {
        return $this->setProperty('description', $description, 'string');
    }

    /**
     * @return string Optional product description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param  string $localeName locale
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setLocaleName($localeName)
    {
        return $this->setProperty('localeName', $localeName, 'string');
    }

    /**
     * @return string locale
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @param  string $metaDescription 
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setMetaDescription($metaDescription)
    {
        return $this->setProperty('metaDescription', $metaDescription, 'string');
    }

    /**
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param  string $metaKeywords 
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setMetaKeywords($metaKeywords)
    {
        return $this->setProperty('metaKeywords', $metaKeywords, 'string');
    }

    /**
     * @return string 
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param  string $name Product name / title
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setName($name)
    {
        return $this->setProperty('name', $name, 'string');
    }

    /**
     * @return string Product name / title
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  string $shortDescription Optional product shortdescription
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setShortDescription($shortDescription)
    {
        return $this->setProperty('shortDescription', $shortDescription, 'string');
    }

    /**
     * @return string Optional product shortdescription
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param  string $titleTag 
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setTitleTag($titleTag)
    {
        return $this->setProperty('titleTag', $titleTag, 'string');
    }

    /**
     * @return string 
     */
    public function getTitleTag()
    {
        return $this->titleTag;
    }

    /**
     * @param  string $urlPath Optional path of product URL
     * @return \jtl\Connector\Model\ProductI18n
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setUrlPath($urlPath)
    {
        return $this->setProperty('urlPath', $urlPath, 'string');
    }

    /**
     * @return string Optional path of product URL
     */
    public function getUrlPath()
    {
        return $this->urlPath;
    }

 
}
