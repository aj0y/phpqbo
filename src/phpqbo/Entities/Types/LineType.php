<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;
use phpqbo\Entities\Types\LineTypes\LineDetailTypeEnum;

/**
 * Class LineType
 * @package phpqbo\Entities\Types
 */
class LineType extends Type
{
  /** @var string  */
  protected $id = '';
  /** @var  int */
  protected $lineNum = 0;
  /** @var string  */
  protected $description = '';

  protected $amount = 0.0;
  /** @var  LinkedTxnType[] */
  protected $linkedTxn = array();
  /** @var  LineDetailTypeEnum */
  protected $detailType;

  /** @var  CustomFieldType[] */
  protected $customField;
}

