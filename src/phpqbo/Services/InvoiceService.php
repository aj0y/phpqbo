<?php

namespace phpqbo\Services;

use phpqbo\Entities\Transaction\Invoice;

/**
* Account Name List nEntity Class
*/
class InvoiceService extends Service
{
    public function __construct($version = Service::VERSION_3)
    {
        $companyId = 0;

        parent::init($version);
        $this->url = sprintf(
          "%s/%s/company/%d/invoice",
          self::BASE_URL,
          $version,
          $companyId
        );

    }

    /**
     * @param Invoice $invoice
     * @return Invoice
     */
    public function create(Invoice $invoice)
    {

    }

    public function get($invoiceId)
    {

    }

    public function delete(Invoice $invoice)
    {

    }

    public function send(Invoice $invoice)
    {

    }

    public function update(Invoice $invoice)
    {

    }

    public function getPDF(Invoice $invoice)
    {

    }
}