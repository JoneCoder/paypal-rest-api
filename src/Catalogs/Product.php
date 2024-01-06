<?php

namespace Jonecoder\PaypalRestApi\Catalogs;

use Jonecoder\PaypalRestApi\Services\PaypalServices;

class Product extends PaypalServices
{
    public function all(int $page = 1, int $pageSize = 20, string $totalRequired = 'true')
    {
        return $this->list("{$this->baseUrl}/v1/catalogs/products?page_size={$pageSize}&page={$page}&total_required={$totalRequired}");
    }

    public function create(array $data)
    {
        return $this->store("{$this->baseUrl}/v1/catalogs/products", $data);
    }

    public function retrieve($id)
    {
        return $this->show("{$this->baseUrl}/v1/catalogs/products/{$id}");
    }

    public function update(array $data, $id)
    {
        $this->patch("{$this->baseUrl}/v1/catalogs/products/{$id}", $data);
    }
}
