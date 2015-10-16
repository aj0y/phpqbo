<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;

/**
 * Class DateTimeType
 * @package phpqbo\Entities\Types
 */
class DateTimeType extends Type
{
  /**
   * Local time zone: YYYY-MM-DDTHH:MM:SS
   * UTC: YYYY-MM-DDT HH :MM: SSZ
   * Specific time zone: YYYY-MM-DDT HH :MM:SS +/- HH :MM
   * @var  string
   */
  protected $dateTime = '';

  /**
   * @return string
   */
  public function getDateTime()
  {
    return $this->dateTime;
  }

  /**
   * @param string $dateTime
   *
   * @return DateTimeType
   */
  public function setDateTime($dateTime)
  {
    $this->dateTime = $dateTime;

    return $this;
  }
}
