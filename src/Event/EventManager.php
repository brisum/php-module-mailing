<?php

namespace Brisum\Mailing\Event;

use Brisum\Mailing\Receiver\ReceiverFactoryInterface;
use Exception;

class EventManager
{
    /**
     * @var ReceiverFactoryInterface
     */
    protected $receiverFactory;

    /**
     * EventManager constructor.
     * @param ReceiverFactoryInterface $receiverFactory
     */
    public function __construct(ReceiverFactoryInterface $receiverFactory)
    {
        $this->receiverFactory = $receiverFactory;
    }

    public function dispatch($event)
    {
        $eventName = isset($event['event']) ? $event['event'] : null;

        if (!$eventName) {
            throw new Exception('Empty Event');
        }

        $receiver = $this->receiverFactory->createReceiver($eventName);
        $receiver->receive($event);
    }
}
