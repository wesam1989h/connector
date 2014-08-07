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
 * Specify product to hide from customerGroup..
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage Product
 */
class ProductInvisibility extends DataModel
{
    /**
     * @var Identity Reference to customerGroup
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $customerGroupId = null;

    /**
     * @var Identity Reference to product
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $productId = null;


    public function __construct()
    {
        $this->customerGroupId = new Identity;
        $this->productId = new Identity;
    }

    /**
     * @param  Identity $customerGroupId Reference to customerGroup
     * @return \jtl\Connector\Model\ProductInvisibility
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setCustomerGroupId(Identity $customerGroupId)
    {
        return $this->setProperty('customerGroupId', $customerGroupId, 'Identity');
    }

    /**
     * @return Identity Reference to customerGroup
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * @param  Identity $productId Reference to product
     * @return \jtl\Connector\Model\ProductInvisibility
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

 
}
