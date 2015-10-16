<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;

/**
 * Class CustomFieldType
 * @package phpqbo\Entities\Types
 */
class CustomFieldType extends Type
{
  /**
   * Unique identifier of the CustomFieldDefinition that corresponds to this CustomField.
   * @var  string
   */
  protected $definitionId = '';
  /** @var  string */
  protected $name = '';
  /** @var  CustomFieldTypeEnum */
  protected $type;
  /** @var string */
  protected $stringValue = '';

  /**
   * @return string
   */
  public function getDefinitionId()
  {
    return $this->definitionId;
  }

  /**
   * @param string $definitionId
   *
   * @return CustomFieldType
   */
  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;

    return $this;
  }

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
   * @return CustomFieldType
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @return CustomFieldTypeEnum
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * @param CustomFieldTypeEnum $type
   *
   * @return CustomFieldType
   */
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * @return string
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }

  /**
   * @param string $stringValue
   *
   * @return CustomFieldType
   */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;

    return $this;
  }
}


class CustomFieldTypeEnum
{
  const CUSTOMFIELDTYPE_STRING = 'StringType';
}