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
 * ProductVariation Model. Each product defines its own variations, that means  variations are not global  in contrast to specifics. .
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage Product
 */
class ProductVariation extends DataModel
{
    /**
     * @var Identity Unique productVariation id
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $id = null;

    /**
     * @var Identity Reference to product
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $productId = null;

    /**
     * @var int Optional sort number
     * @Serializer\Type("integer")
     */
    protected $sort = 0;

    /**
     * @var string Variation type e.g. radio or select
     * @Serializer\Type("string")
     */
    protected $type = '';

    /**
     * @var \jtl\Connector\Model\ProductVariationValue[]
     * @Serializer\Type("array<jtl\Connector\Model\ProductVariationValue>")
     */
    protected $values = array();
    /**
     * @var \jtl\Connector\Model\ProductVariationInvisibility[]
     * @Serializer\Type("array<jtl\Connector\Model\ProductVariationInvisibility>")
     */
    protected $invisibilities = array();
    /**
     * @var \jtl\Connector\Model\ProductVariationI18n[]
     * @Serializer\Type("array<jtl\Connector\Model\ProductVariationI18n>")
     */
    protected $i18ns = array();

    public function __construct()
    {
        $this->id = new Identity;
        $this->productId = new Identity;
    }

    /**
     * @param  Identity $id Unique productVariation id
     * @return \jtl\Connector\Model\ProductVariation
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('id', $id, 'Identity');
    }

    /**
     * @return Identity Unique productVariation id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  Identity $productId Reference to product
     * @return \jtl\Connector\Model\ProductVariation
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
     * @param  int $sort Optional sort number
     * @return \jtl\Connector\Model\ProductVariation
     * @throws \InvalidArgumentException if the provided argument is not of type 'int'.
     */
    public function setSort($sort)
    {
        return $this->setProperty('sort', $sort, 'int');
    }

    /**
     * @return int Optional sort number
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param  string $type Variation type e.g. radio or select
     * @return \jtl\Connector\Model\ProductVariation
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setType($type)
    {
        return $this->setProperty('type', $type, 'string');
    }

    /**
     * @return string Variation type e.g. radio or select
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  \jtl\Connector\Model\ProductVariationValue $values
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function addValue(\jtl\Connector\Model\ProductVariationValue $value)
    {
        $this->values[] = $value;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\ProductVariationValue[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function clearValues()
    {
        $this->values = array();
        return $this;
    }

    /**
     * @param  \jtl\Connector\Model\ProductVariationInvisibility $invisibilities
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function addInvisibility(\jtl\Connector\Model\ProductVariationInvisibility $invisibility)
    {
        $this->invisibilities[] = $invisibility;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\ProductVariationInvisibility[]
     */
    public function getInvisibilities()
    {
        return $this->invisibilities;
    }

    /**
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function clearInvisibilities()
    {
        $this->invisibilities = array();
        return $this;
    }

    /**
     * @param  \jtl\Connector\Model\ProductVariationI18n $i18ns
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function addI18n(\jtl\Connector\Model\ProductVariationI18n $i18n)
    {
        $this->i18ns[] = $i18n;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\ProductVariationI18n[]
     */
    public function getI18ns()
    {
        return $this->i18ns;
    }

    /**
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function clearI18ns()
    {
        $this->i18ns = array();
        return $this;
    }

 
}
