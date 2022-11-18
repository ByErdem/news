<?php

namespace App\Controller;
use App\Message\OrderConfirmationEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/placeholder", name="placeholder")
     * @param MessageBusInterface $bus
     * @return Response
     */
    public function placeOrder(MessageBusInterface $bus)
    {
        $bus->dispatch(new OrderConfirmationEmail(1));

        return new Response('Your order has been placed');
    }
}
