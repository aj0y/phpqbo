<?php

namespace phpqbo\Entities\Types\LineTypes;

use phpqbo\Entities\Types\LineType;

/**
 * Class SubtotalLineType
 * @package phpqbo\Entities\Types\LineTypes
 */
class SubtotalLineType extends LineType
{
  protected $subtotalLineDetail;

  protected $detailType = LineDetailTypeEnum::SUBTOTAL_LINE_DETAIL;
}