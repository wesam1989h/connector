<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * CategoryI18n Model
 * @access public
 */
class CategoryI18n extends DataModel
{
    /**
     * @var string
     */
    protected $_localeName;
    
    /**
     * @var int
     */
    protected $_categoryId;
    
    /**
     * @var string
     */
    protected $_name;
    
    /**
     * @var string
     */
    protected $_url;
    
    /**
     * @var string
     */
    protected $_description;
    
    /**
     * @var string
     */
    protected $_metaDescription;
    
    /**
     * @var string
     */
    protected $_metaKeywords;
    
    /**
     * @var string
     */
    protected $_titleTag;
    
    /**
     * CategoryI18n Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        switch ($name) {
            case "_localeName":
            case "_name":
            case "_url":
            case "_description":
            case "_metaDescription":
            case "_metaKeywords":
            case "_titleTag":
            
                if (strlen(trim($value)) > 0) {
                    $this->$name = (string)$value;
                }
                break;
        
            case "_categoryId":
            
                if (is_numeric($value)) {
                    $this->$name = (int)$value;                
                }
                break;
        
        }
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}
?>