<?php

namespace phpqbo\Entities\Types\LineTypes;

use phpqbo\Entities\Types\LineType;

/**
 * Class DescriptionLineType
 * @package phpqbo\Entities\Types\LineTypes
 */
class DescriptionLineType extends LineType
{
  protected $descriptionLineDetail;

  protected $detailType = LineDetailTypeEnum::DESCRIPTION_LINE_DETAIL;
}