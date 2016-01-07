<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;

class DiscountLineDetailType extends Type
{
  /** @var  ReferenceType */
  protected $discountRef;

  /** @var boolean */
  protected $percentBased = false;

  /** @var float  */
  protected $discountPercent = 0.0;

  /** @var  ReferenceType */
  protected $discountAccountRef;

  /** @var  ReferenceType */
  protected $classRef;

  /** @var  ReferenceType */
  protected $taxCodeRef;
}