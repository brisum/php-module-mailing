<?php

namespace Brisum\Mailing\Receiver;

interface SenderFactoryInterfaceFactory {
	/**
	 * @param string $triggerName
	 * @return TriggerInterface
	 */
	public function createTrigger($triggerName);
}
