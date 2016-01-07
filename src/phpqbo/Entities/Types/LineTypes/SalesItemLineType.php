<?php

namespace phpqbo\Entities\Types\LineTypes;

use phpqbo\Entities\Types\LineType;
use phpqbo\Entities\Types\SalesLineItemDetailType;

/**
 * Class SalesItemLineType
 * @package phpqbo\Entities\Types\LineTypes
 */
class SalesItemLineType extends LineType
{
  /** @var  SalesLineItemDetailType */
  protected $salesLineItemDetail;

  protected $detailType = LineDetailTypeEnum::SALESITEM_LINE_DETAIL;
}