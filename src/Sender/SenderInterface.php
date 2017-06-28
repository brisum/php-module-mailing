<?php

namespace Brisum\Mailing\Receiver;

interface SenderInterface {
    /**
     * @return string
     */
    function getName();

	/**
	 * @return void
	 */
	function run();
}
