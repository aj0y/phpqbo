<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;

/**
 * Class ReferenceType
 * @package phpqbo\Entities\Types
 */
class ReferenceType extends Type
{
  /**
   * An identifying name for the entity instance.
   * This is derived from the instance using the field that holds the common name of that instance.
   * For example, references for Customer use the DisplayName field to populate this field.
   * Optional in requests.
   * Optionally returned is responses. Implementation dependent.
   * @var string
   */
  protected $name = '';

  /**
   * The entity name to which the reference belongs.
   * Required where type is different from target entity reference in the tag.
   * @var string
   */
  protected $type = '';

  /**
   * required
   * The ID of the referenced object. This ID can be used in subsequent target entity requests to retrieve the entire instance.
   * @var string
   */
  protected $value = '';

  // GETTERS AND SETTERS
  // ===============================================
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   *
   * @return ReferenceType
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * @param string $type
   *
   * @return ReferenceType
   */
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }

  /**
   * @param string $value
   *
   * @return ReferenceType
   */
  public function setValue($value)
  {
    $this->value = $value;

    return $this;
  }
}

