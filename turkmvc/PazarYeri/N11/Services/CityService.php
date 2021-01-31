<?php

namespace turkmvc\PazarYeri\N11\Services;

Class CityService
{

	/**
	 *
	 * @description N11 SOAP Şehir Url
	 *
	 */
	public $url = 'https://api.n11.com/ws/CityService.wsdl';

	/**
	 *
	 * @description N11 Üzerindeki bütün şehirlerin listesini döndürür.
	 *
	 */
	public function getCities($client)
	{	

		return $client->sendRequest('getCities');

	}

	/**
	 *
	 * @description Şehir hakkında birkaç bilgi döndürür.
	 * @param int Şehir Id
	 *
	 */
	public function getCity($client, $cityId)
	{	

		return $client->sendRequest('getCity', array('cityCode' => $cityId));

	}

	/**
	 *
	 * @description Plaka kodu verilen şehre ait ilçelerinin listelenmesi için kullanılır.
	 * @param int Şehir Id
	 *
	 */
	public function getDistrict($client, $cityId)
	{	

		return $client->sendRequest('getDistrict', array('cityCode' => $cityId));

	}

	/**
	 *
	 * @description İlçe kodu verilen semt/mahallelerin listelenmesi için kullanılır.
	 * @param int İlçe Id
	 *
	 */
	public function getNeighborhoods($client, $districtId)
	{	

		return $client->sendRequest('getNeighborhoods', array('districtId' => $districtId));

	}

}
