<?php

namespace App\MessageHandler;
use App\Message\OrderConfirmationEmail;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class OrderConfirmationEmailHandler implements MessageHandlerInterface
{
    public function __invoke(OrderConfirmationEmail $orderConfirmationEmail)
    {
        //Query order / customer details from the DB

        // Create email from template

        //Send email
        echo 'Sending email now...';

        //... order stuff which takes a while ...

    }
}