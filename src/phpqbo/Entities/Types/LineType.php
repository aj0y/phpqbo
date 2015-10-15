<?php

namespace phpqbo\Entities\Types;

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
  /** @var   */
  protected $description = '';

  protected $amount = 0.0;
  /** @var  LinkedTxnType[] */
  protected $linkedTxn = array();
  /** @var  LineDetailTypeEnum */
  protected $detailType;

  protected $salesLineItemDetail;
  /** @var  CustomFieldType[] */
  protected $customField;
}


class LineDetailTypeEnum
{
  const SALES_ITEM_LINE_DETAIL = 'SalesItemLineDetail';
}
