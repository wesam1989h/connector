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
 * ToDo: Remove (deprecated).
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage Product
 */
class ProductVariationValueDependency extends DataModel
{
    /**
     * @var Identity 
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $productVariationValueId = null;

    /**
     * @var Identity 
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $productVariationValueTargetId = null;


    public function __construct()
    {
        $this->productVariationValueId = new Identity;
        $this->productVariationValueTargetId = new Identity;
    }

    /**
     * @param  Identity $productVariationValueId 
     * @return \jtl\Connector\Model\ProductVariationValueDependency
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setProductVariationValueId(Identity $productVariationValueId)
    {
        return $this->setProperty('productVariationValueId', $productVariationValueId, 'Identity');
    }

    /**
     * @return Identity 
     */
    public function getProductVariationValueId()
    {
        return $this->productVariationValueId;
    }

    /**
     * @param  Identity $productVariationValueTargetId 
     * @return \jtl\Connector\Model\ProductVariationValueDependency
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setProductVariationValueTargetId(Identity $productVariationValueTargetId)
    {
        return $this->setProperty('productVariationValueTargetId', $productVariationValueTargetId, 'Identity');
    }

    /**
     * @return Identity 
     */
    public function getProductVariationValueTargetId()
    {
        return $this->productVariationValueTargetId;
    }

 
}
