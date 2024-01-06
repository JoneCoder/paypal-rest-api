<?php

namespace Jonecoder\PaypalRestApi\Reporting;

use Jonecoder\PaypalRestApi\Services\PaypalServices;

class Transaction extends PaypalServices
{
    public function all($startDate = null, $endDate = null, int $page = 1, int $pageSize = 20)
    {
        return $this->list("{$this->baseUrl}/v1/reporting/transactions?page_size={$pageSize}&page={$page}&start_date=$startDate&end_date=$endDate");
    }
}
