<?php
namespace jtl\Connector\Event\Payment;

use \Symfony\Component\EventDispatcher\Event;
use \jtl\Connector\Model\Payment;

class PaymentAfterPushEvent extends Event
{
    const EVENT_NAME = 'payment.after.push';

    protected $payment;

    public function __construct(Payment &$payment)
    {
        $this->payment = $payment;
    }

    public function getPayment()
    {
        return $this->payment;
    }
}