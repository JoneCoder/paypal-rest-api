<?php

namespace Jonecoder\PaypalRestApi\Billing;

use Jonecoder\PaypalRestApi\PayPalConstants;
use Jonecoder\PaypalRestApi\Services\PaypalServices;

class Subscription extends PaypalServices
{
    public function create(array $data)
    {
        return $this->store("{$this->baseUrl}/v1/billing/subscriptions", $data);
    }

    public function retrieve($id)
    {
        return $this->show("{$this->baseUrl}/v1/billing/subscriptions/{$id}");
    }

    public function transactions($id)
    {
        return $this->show("{$this->baseUrl}/v1/billing/subscriptions/{$id}/transactions");
    }

    public function update(array $data, $id)
    {
        $this->patch("{$this->baseUrl}/v1/billing/subscriptions/{$id}", $data);
    }

    public function activate($id)
    {
        $this->call("{$this->baseUrl}/v1/billing/subscriptions/{$id}/activate", 'post');
    }

    public function cancel($id)
    {
        $this->call("{$this->baseUrl}/v1/billing/subscriptions/{$id}/cancel", 'post');
    }

    public function getApprovalLink($subscription)
    {
        return $this->getLink($subscription, PayPalConstants::APPROVAL_URL);
    }
}
