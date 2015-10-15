<?php

namespace phpqbo\Entities\Types;

/**
 * Class SalesLineItemDetailType
 * @package phpqbo\Entities\Types
 */
class SalesLineItemDetailType extends Type
{
  /** @var  ReferenceType */
  protected $itemRef;
  /** @var  ReferenceType */
  protected $classRef;

  // TODO: use Money
  /** @var float  */
  protected $unitPrice = 0.0;

  /** @var  ReferenceType */
  protected $priceLevelRef;

  protected $markupInfo;
  /** @var float  */
  protected $qty = 0.0;
  /** @var  ReferenceType */
  protected $taxCodeRef;
  /** @var  DateType */
  protected $serviceDate;

  /** @var float  */
  protected $taxInclusiveAmt = 0.0;
}

