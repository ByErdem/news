<?php

namespace App\Message;

class OrderConfirmationEmail
{
    /**
     * @var int
     */
    private $orderId;
    public function __construct(int $orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */

    public function getOrderId():int
    {
        return $this->orderId;        
    }
}