<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;

/**
 * Class ModificationMetaDataType
 * @package phpqbo\Entities\Types
 */
class ModificationMetaDataType extends Type
{
  /** @var  DateTimeType */
  protected $createTime;
  /** @var  DateTimeType */
  protected $lastUpdatedTime;

  /**
   * @return DateTimeType
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }

  /**
   * @param DateTimeType $createTime
   *
   * @return ModificationMetaData
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;

    return $this;
  }

  /**
   * @return DateTimeType
   */
  public function getLastUpdatedTime()
  {
    return $this->lastUpdatedTime;
  }

  /**
   * @param DateTimeType $lastUpdatedTime
   *
   * @return ModificationMetaData
   */
  public function setLastUpdatedTime($lastUpdatedTime)
  {
    $this->lastUpdatedTime = $lastUpdatedTime;

    return $this;
  }
}

