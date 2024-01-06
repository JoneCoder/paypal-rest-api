<?php

namespace Jonecoder\PaypalRestApi\Billing;

use Jonecoder\PaypalRestApi\Services\PaypalServices;

class Plan extends PaypalServices
{
    public function all(int $page = 1, int $pageSize = 20, string $totalRequired = 'true', ?string $productId = null)
    {
        return $this->list("{$this->baseUrl}/v1/billing/plans?product_id={$productId}&page_size={$pageSize}&page={$page}&total_required={$totalRequired}");
    }

    public function create(array $data)
    {
        return $this->store("{$this->baseUrl}/v1/billing/plans", $data);
    }

    public function retrieve($id)
    {
        return $this->show("{$this->baseUrl}/v1/billing/plans/{$id}");
    }

    public function update(array $data, $id)
    {
        $this->patch("{$this->baseUrl}/v1/billing/plans/{$id}", $data);
    }

    public function activate($id)
    {
        $this->call("{$this->baseUrl}/v1/billing/plans/{$id}/activate", 'post');
    }

    public function deactivate($id)
    {
        $this->call("{$this->baseUrl}/v1/billing/plans/{$id}/deactivate", 'post');
    }
}
