<?php

namespace Jonecoder\PaypalRestApi\Interfaces;

interface PaypalInterface
{
    public function list(string $url);

    public function store(string $url, array $data);

    public function show(string $url);

    public function patch(string $url, array $data);

    public function call(string $url, string $method = 'get', array $data = []);
}