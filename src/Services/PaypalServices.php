<?php

namespace Jonecoder\PaypalRestApi\Services;

use Illuminate\Support\Facades\Http;
use Jonecoder\PaypalRestApi\Interfaces\PaypalInterface;
use Jonecoder\PaypalRestApi\Paypal;

class PaypalServices extends Paypal implements PaypalInterface
{
    public function patch(string $url, array $data)
    {
        Http::withToken($this->getAccessToken())
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->patch($url, $data);
    }

    public function list(string $url)
    {
        return Http::withToken($this->getAccessToken())
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->get($url);
    }

    public function store(string $url, array $data)
    {
        return Http::withToken($this->getAccessToken())
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->post($url, $data);
    }

    public function show(string $url)
    {
        return Http::withToken($this->getAccessToken())
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->get($url);
    }

    public function call(string $url, string $method = 'get', array $data = [])
    {
        return Http::withToken($this->getAccessToken())
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->$method($url, $data);
    }

    public function getLink($subscription, $rel)
    {
        if (is_array($subscription['links'])) {
            foreach ($subscription['links'] as $link) {
                if ($link['rel'] == $rel) {
                    return $link['href'];
                }
            }
        }

    }
}
