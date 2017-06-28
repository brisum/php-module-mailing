<?php

namespace Brisum\Mailing\Receiver;

interface ReceiverInterface {
    /**
     * @return mixed
     */
    function getName();

	/**
	 * @param array $params
	 * @return void
	 */
    function receive(array $params);
}
