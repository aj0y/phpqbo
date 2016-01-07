<?php

namespace phpqbo\Services;

/**
 * Service Abstract class
 * all Service classes must derive from this class
 */
abstract class Service
{
  const VERSION_3 = 'v3';

  const BASE_URL         = 'https://quickbooks.api.intuit.com';
  const SANDBOX_BASE_URL = 'https://sandbox-quickbooks.api.intuit.com';

  /** @var string */
  private $version;

  /** @var string */
  protected $url;

  /**
  * @param string $version
  */
  protected function init($version)
  {
    $this->version = $version;
  }

  public function request()
  {

  }
}