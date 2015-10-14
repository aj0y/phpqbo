<?php

namespace phpqbo\Entities\Transaction;

use phpqbo\Entities\Entity;
use phpqbo\Entities\NameList\Item;
use phpqbo\Services\InvoiceService;

/**
 * Invoice Transaction Entity Class
 */
class Invoice extends Entity
{
  const ID = 'Id';
  const SYNC_TOKEN = 'SyncToken';
  const METADATA = 'MetaData';

  protected $id;
  protected $syncToken;
  protected $metadata = array();
  protected $docNumber;
  protected $txnDate; // The date entered by the user when this transaction occurred.

  protected $customFields = array();
  protected $departmentRef;
  protected $currencyRef;

  protected $exchangeRef;
  protected $privateNote;
  protected $linkedTxn = array();
  /** @var Line[] */
  protected $lineItems = array();


  public $attributes = array(
    self::ID,
  );

  /** @var  InvoiceService */
  protected $service;

  /**
   * @param InvoiceService $service
   * @return bool
   */
  protected function init(InvoiceService $service)
  {
    if ($service) {
      $this->service = $service;

      return true;
    }
    $this->service = new InvoiceService();
  }

  /**
   * @param InvoiceService|null $service
   */
  public function update(InvoiceService $service = null)
  {
    $this->init($service);
  }

  /**
   * @param InvoiceService|null $service
   */
  public function create(InvoiceService $service = null)
  {
    $this->init($service);
  }

  /**
   * @param InvoiceService|null $service
   */
  public function delete(InvoiceService $service = null)
  {
    $this->init($service);
  }

  /**
   * @param string $email
   * @param InvoiceService|null $service
   */
  public function send($email, InvoiceService $service = null)
  {
    $this->init($service);
  }

  /**
   * @param InvoiceService|null $service
   */
  public function getPDF(InvoiceService $service = null)
  {
    $this->init($service);
  }
}
