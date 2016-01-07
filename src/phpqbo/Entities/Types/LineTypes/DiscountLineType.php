<?php

namespace phpqbo\Entities\Types\LineTypes;

use phpqbo\Entities\Types\LineType;

/**
 * Class DiscountLineType
 * @package phpqbo\Entities\Types\LineTypes
 */
class DiscountLineType extends LineType
{
  protected $discountLineDetail;

  protected $detailType = LineDetailTypeEnum::DISCOUNT_LINE_DETAIL;
}