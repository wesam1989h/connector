<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage GlobalData
 */

namespace jtl\Connector\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Localized delivery status text. Delivery status is set in the Wawi-ERP. .
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage GlobalData
 */
class DeliveryStatus extends DataModel
{
    /**
     * @var Identity DeliveryStatus id
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $id = null;

    /**
     * @var string Locale
     * @Serializer\Type("string")
     */
    protected $localeName = '';

    /**
     * @var string Localized delivery status text
     * @Serializer\Type("string")
     */
    protected $name = '';


    public function __construct()
    {
        $this->id = new Identity;
    }

    /**
     * @param  Identity $id DeliveryStatus id
     * @return \jtl\Connector\Model\DeliveryStatus
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('id', $id, 'Identity');
    }

    /**
     * @return Identity DeliveryStatus id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  string $localeName Locale
     * @return \jtl\Connector\Model\DeliveryStatus
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setLocaleName($localeName)
    {
        return $this->setProperty('localeName', $localeName, 'string');
    }

    /**
     * @return string Locale
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @param  string $name Localized delivery status text
     * @return \jtl\Connector\Model\DeliveryStatus
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setName($name)
    {
        return $this->setProperty('name', $name, 'string');
    }

    /**
     * @return string Localized delivery status text
     */
    public function getName()
    {
        return $this->name;
    }

 
}
