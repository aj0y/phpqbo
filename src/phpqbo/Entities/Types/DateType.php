<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;

/**
 * Class DateType
 * @package phpqbo\Entities\Types
 */
class DateType extends Type
{
  /**
   * Local timezone: YYYY-MM-DD
   * UTC: YYYY-MM-DDZ
   * Specific time zone: YYYY-MM-DD+/-HH:MM
   *
   * @var string
   */
  protected $date = '';

  /**
   * @return string
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * @param string $date
   *
   * @return DateType
   */
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }
}


