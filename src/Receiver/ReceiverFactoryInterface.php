<?php

namespace Brisum\Mailing\Receiver;

interface ReceiverFactoryInterface {
	/**
	 * @param string $eventName
	 * @return ReceiverInterface
	 */
	function createReceiver($eventName);
}
