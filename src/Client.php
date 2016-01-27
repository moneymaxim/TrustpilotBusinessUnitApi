<?php

namespace Trustpilot\Api\BusinessUnit;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;

class Client
{
    const ENDPOINT = 'https://api.trustpilot.com/v1/business-units';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var GuzzleClientInterface
     */
    private $guzzle;

    /**
     * @param string $apiKey
     * @param GuzzleClientInterface $guzzle
     */
    public function __construct($apiKey, GuzzleClientInterface $guzzle = null)
    {
        $this->apiKey = $apiKey;
        $this->guzzle = (null !== $guzzle) ? $guzzle : new GuzzleClient();
    }

    /**
     * @param string $url
     * @param array $form
     * @return array
     */
    private function makeRequest($url, array $form = null)
    {
        $options = ['query' => ['apikey' => $this->apiKey]];

        if (null !== $form) {
            $options['query'] += $form;
        }

        $response = $this->guzzle->request('GET', $url, $options);

        return json_decode((string) $response->getBody(), true);
    }

    /**
     * @param string $name
     * @return array
     */
    public function find($name)
    {
        return $this->makeRequest(self::ENDPOINT . '/find', ['name' => $name]);
    }

    /**
     * @param string $businessUnitId
     * @return array
     */
    public function get($businessUnitId)
    {
        return $this->makeRequest(self::ENDPOINT . '/' . $businessUnitId);
    }

    /**
     * @param string $businessUnitId
     * @return array
     */
    public function getReviews($businessUnitId, array $optionalParams = [])
    {
        return $this->makeRequest(self::ENDPOINT . '/' . $businessUnitId . '/reviews', $optionalParams);
    }
}
