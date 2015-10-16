<?php

namespace phpqbo\Services;

use phpqbo\Entities\Transaction\Invoice;

/**
 * Invoice Service Class
 * Has actions that can be taken on an Invoice Entity
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

    /**
     * @param int $invoiceId
     */
    public function get($invoiceId)
    {

    }

    /**
     * @param Invoice $invoice
     */
    public function delete(Invoice $invoice)
    {

    }

    /**
     * @param string  $email
     * @param Invoice $invoice
     */
    public function send($email, Invoice $invoice)
    {

    }

    /**
     * @param Invoice $invoice
     */
    public function update(Invoice $invoice)
    {

    }

    /**
     * @param Invoice $invoice
     * @return string
     */
    public function getPDF(Invoice $invoice)
    {
        return '';
    }
}