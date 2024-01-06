<?php

namespace Jonecoder\PaypalRestApi;

use PayPal\Exception\PayPalConfigurationException;

class Paypal
{
    public \PayPal\Rest\ApiContext $apiContext;

    public \PayPal\Auth\OAuthTokenCredential $credential;

    public array $config;

    public string $baseUrl;

    public function __construct()
    {
        $this->apiContext = new \PayPal\Rest\ApiContext;
        $this->config = $this->apiContext->getConfig();
        $this->baseUrl = rtrim(trim($this->_getEndpoint($this->config)), '/');

        $this->credential = new \PayPal\Auth\OAuthTokenCredential(
            config('paypal.key'),     // ClientID
            config('paypal.secret')   // ClientSecret
        );
    }

    public function getAccessToken(): ?string
    {
        return $this->credential->getAccessToken($this->config);
    }

    /**
     * End Point
     *
     * @param  array  $config
     * @return string
     *
     * @throws \PayPal\Exception\PayPalConfigurationException
     */
    private function _getEndpoint($config)
    {
        if (isset($config['Paypal.EndPoint'])) {
            return $config['Paypal.EndPoint'];
        } elseif (isset($config['mode'])) {
            return match (strtoupper($config['mode'])) {
                'SANDBOX' => PayPalConstants::REST_SANDBOX_ENDPOINT,
                'LIVE' => PayPalConstants::REST_LIVE_ENDPOINT,
                default => throw new PayPalConfigurationException('The mode config parameter must be set to either sandbox/live'),
            };
        } else {
            // Defaulting to Sandbox
            return PayPalConstants::REST_SANDBOX_ENDPOINT;
        }
    }
}
