<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Type
 */

namespace jtl\Connector\Type;

use \jtl\Connector\Type\PropertyInfo;

/**
 * @access public
 * @package jtl\Connector\Type
 */
class SpecificValue extends DataType
{
    protected function loadProperties()
    {
        return array(
            new PropertyInfo('id', 'Identity', null, true, true, false),
            new PropertyInfo('specificId', 'Identity', null, false, true, false),
            new PropertyInfo('sort', 'string', '', false, false, false),
            new PropertyInfo('i18ns', '\jtl\Connector\Model\SpecificValueI18n', null, false, false, true),
        );
    }

    public function isMain()
    {
        return false;
    }
}
