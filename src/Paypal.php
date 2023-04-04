<?php

namespace Jonecoder\PaypalRestApi;

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
        $this->baseUrl      = config('Paypal.url');

        $this->credential = new \PayPal\Auth\OAuthTokenCredential(
            config('Paypal.key'),     // ClientID
            config('Paypal.secret')   // ClientSecret
        );
    }

    public function getAccessToken(): ?string
    {
        return $this->credential->getAccessToken($this->config);
    }
}