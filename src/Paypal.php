<?php

namespace Jonecoder\PaypalRestApi;

use PayPal\Core\PayPalConstants;
use PayPal\Exception\PayPalConfigurationException;

class Paypal
{
    public \PayPal\Rest\ApiContext $apiContext;
    public \PayPal\Auth\OAuthTokenCredential $credential;

    public array $config;
    public string $baseUrl;

    public function __construct()
    {
        $this->apiContext   = new \PayPal\Rest\ApiContext();
        $this->config       = $this->apiContext->getConfig();
        $this->baseUrl      = rtrim(trim($this->_getEndpoint($this->config)), '/');

        $this->credential = new \PayPal\Auth\OAuthTokenCredential(
            config('Paypal.key'),     // ClientID
            config('Paypal.secret')   // ClientSecret
        );
    }

    public function getAccessToken(): ?string
    {
        return $this->credential->getAccessToken($this->config);
    }


    /**
     * End Point
     *
     * @param array $config
     *
     * @return string
     * @throws \PayPal\Exception\PayPalConfigurationException
     */
    private function _getEndpoint($config)
    {
        if (isset($config['Paypal.EndPoint'])) {
            return $config['Paypal.EndPoint'];
        } elseif (isset($config['mode'])) {
            switch (strtoupper($config['mode'])) {
                case 'SANDBOX':
                    return PayPalConstants::REST_SANDBOX_ENDPOINT;
                    break;
                case 'LIVE':
                    return PayPalConstants::REST_LIVE_ENDPOINT;
                    break;
                default:
                    throw new PayPalConfigurationException('The mode config parameter must be set to either sandbox/live');
                    break;
            }
        } else {
            // Defaulting to Sandbox
            return PayPalConstants::REST_SANDBOX_ENDPOINT;
        }
    }
}
