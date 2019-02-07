<?php

	// Mollie Shopware Plugin Version: 1.3.15

namespace Mollie\Api\Resources;

use Mollie\Api\MollieApiClient;
abstract class BaseResource
{
    /**
     * @var MollieApiClient
     */
    protected $client;
    /**
     * @param $client
     */
    public function __construct(\Mollie\Api\MollieApiClient $client)
    {
        $this->client = $client;
    }
}