<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage CustomerOrder
 */

namespace jtl\Connector\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Additional payment info for direct debit / banktransfer or payment by credit card. .
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage CustomerOrder
 */
class CustomerOrderPaymentInfo extends DataModel
{
    /**
     * @var Identity Reference to customerOrder
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $customerOrderId = null;

    /**
     * @var Identity Unique customerOrderPaymentInfo id
     * @Serializer\Type("jtl\Connector\Model\Identity")
     */
    protected $id = null;

    /**
     * @var string Bank account holder name
     * @Serializer\Type("string")
     */
    protected $accountHolder = '';

    /**
     * @var string Bank account number (deprecated in DE since SEPA)
     * @Serializer\Type("string")
     */
    protected $accountNumber = '';

    /**
     * @var string Bank code (deprecated in DE since SEPA)
     * @Serializer\Type("string")
     */
    protected $bankCode = '';

    /**
     * @var string Bank name
     * @Serializer\Type("string")
     */
    protected $bankName = '';

    /**
     * @var string Bank Identifier Code (BIC)
     * @Serializer\Type("string")
     */
    protected $bic = '';

    /**
     * @var string Credit card expiration date
     * @Serializer\Type("string")
     */
    protected $creditCardExpiration = '';

    /**
     * @var string Credit card holder name
     * @Serializer\Type("string")
     */
    protected $creditCardHolder = '';

    /**
     * @var string Credit card number
     * @Serializer\Type("string")
     */
    protected $creditCardNumber = '';

    /**
     * @var string Credit card type (e.g. "visa")
     * @Serializer\Type("string")
     */
    protected $creditCardType = '';

    /**
     * @var string Credit card verification number
     * @Serializer\Type("string")
     */
    protected $creditCardVerificationNumber = '';

    /**
     * @var string International Bank Account Number (IBAN)
     * @Serializer\Type("string")
     */
    protected $iban = '';


    public function __construct()
    {
        $this->customerOrderId = new Identity;
        $this->id = new Identity;
    }

    /**
     * @param  Identity $customerOrderId Reference to customerOrder
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setCustomerOrderId(Identity $customerOrderId)
    {
        return $this->setProperty('customerOrderId', $customerOrderId, 'Identity');
    }

    /**
     * @return Identity Reference to customerOrder
     */
    public function getCustomerOrderId()
    {
        return $this->customerOrderId;
    }

    /**
     * @param  Identity $id Unique customerOrderPaymentInfo id
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('id', $id, 'Identity');
    }

    /**
     * @return Identity Unique customerOrderPaymentInfo id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  string $accountHolder Bank account holder name
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setAccountHolder($accountHolder)
    {
        return $this->setProperty('accountHolder', $accountHolder, 'string');
    }

    /**
     * @return string Bank account holder name
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * @param  string $accountNumber Bank account number (deprecated in DE since SEPA)
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setAccountNumber($accountNumber)
    {
        return $this->setProperty('accountNumber', $accountNumber, 'string');
    }

    /**
     * @return string Bank account number (deprecated in DE since SEPA)
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param  string $bankCode Bank code (deprecated in DE since SEPA)
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setBankCode($bankCode)
    {
        return $this->setProperty('bankCode', $bankCode, 'string');
    }

    /**
     * @return string Bank code (deprecated in DE since SEPA)
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @param  string $bankName Bank name
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setBankName($bankName)
    {
        return $this->setProperty('bankName', $bankName, 'string');
    }

    /**
     * @return string Bank name
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param  string $bic Bank Identifier Code (BIC)
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setBic($bic)
    {
        return $this->setProperty('bic', $bic, 'string');
    }

    /**
     * @return string Bank Identifier Code (BIC)
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param  string $creditCardExpiration Credit card expiration date
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setCreditCardExpiration($creditCardExpiration)
    {
        return $this->setProperty('creditCardExpiration', $creditCardExpiration, 'string');
    }

    /**
     * @return string Credit card expiration date
     */
    public function getCreditCardExpiration()
    {
        return $this->creditCardExpiration;
    }

    /**
     * @param  string $creditCardHolder Credit card holder name
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setCreditCardHolder($creditCardHolder)
    {
        return $this->setProperty('creditCardHolder', $creditCardHolder, 'string');
    }

    /**
     * @return string Credit card holder name
     */
    public function getCreditCardHolder()
    {
        return $this->creditCardHolder;
    }

    /**
     * @param  string $creditCardNumber Credit card number
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        return $this->setProperty('creditCardNumber', $creditCardNumber, 'string');
    }

    /**
     * @return string Credit card number
     */
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    /**
     * @param  string $creditCardType Credit card type (e.g. "visa")
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setCreditCardType($creditCardType)
    {
        return $this->setProperty('creditCardType', $creditCardType, 'string');
    }

    /**
     * @return string Credit card type (e.g. "visa")
     */
    public function getCreditCardType()
    {
        return $this->creditCardType;
    }

    /**
     * @param  string $creditCardVerificationNumber Credit card verification number
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setCreditCardVerificationNumber($creditCardVerificationNumber)
    {
        return $this->setProperty('creditCardVerificationNumber', $creditCardVerificationNumber, 'string');
    }

    /**
     * @return string Credit card verification number
     */
    public function getCreditCardVerificationNumber()
    {
        return $this->creditCardVerificationNumber;
    }

    /**
     * @param  string $iban International Bank Account Number (IBAN)
     * @return \jtl\Connector\Model\CustomerOrderPaymentInfo
     * @throws \InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setIban($iban)
    {
        return $this->setProperty('iban', $iban, 'string');
    }

    /**
     * @return string International Bank Account Number (IBAN)
     */
    public function getIban()
    {
        return $this->iban;
    }

 
}
