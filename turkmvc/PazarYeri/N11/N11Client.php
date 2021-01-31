<?php

namespace turkmvc\PazarYeri\N11;

use turkmvc\PazarYeri\N11\Helper\Gateway;
use turkmvc\PazarYeri\N11\Helper\N11Exception;

Class N11Client extends Gateway
{

	/**
	 *
	 * @description N11 Api Key
	 * @param string $apiKey
	 *
	 */
	public function setApiKey($apiKey)
	{

		$this->apiKey = $apiKey;

	}

	/**
	 *
	 * @description N11 Api Şifre
	 * @param string $apiPassword
	 *
	 */
	public function setApiPassword($apiPassword)
	{

		$this->apiPassword = $apiPassword;

	}

}
