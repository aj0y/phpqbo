<?php

namespace phpqbo\Entities\NameList;
ß
use phpqbo\Entities\Entity;
use phpqbo\Entities\Types\ReferenceType;

/**
 * Item Name List Entity Class
 */
class Item extends Entity
{
  const NAME        = 'Name';
  const SKU         = 'Sku';
  const DESCRIPTION = 'Description';
  const ACTIVE      = 'Active';
  const SUB_ITEM    = 'SubItem';

  /** @var  string */
  protected $name = '';
  /** @var  string */
  protected $sku = '' ;
  /** @var  string */
  protected $description = '';
  /** @var  bool */
  protected $isActive = true;
  /** @var  bool */
  protected $isSubItem = false;
  /** @var ReferenceType | null  */
  protected $parentRef = null; //  If SubItem is true, then ParentRef is required.
  /** @var int  */
  protected $level = 0;
  /**
   * Fully qualified name of the entity. read-only
   * The fully qualified name prepends the topmost parent, followed by each sub element separated by colons.
   * Takes the form of Item:SubItem. Returned from an existing object and not input on a new object.
   * Constraints: Limited to 5 levels.
   * @var string
   */
  protected $fullyQualifiedName = null;
  /**
   * If true, transactions for this item are taxable. Applicable to US companies, only.
   * @var bool
   */
  protected $isTaxable = true;
  /**
   * True if the sales tax is included in the item amount, and therefore is not calculated for the transaction.
   * @var bool
   */
  protected $isSalesTaxInclusive = false;

  // TODO: use Money class
  /** @var float */
  protected $unitPrice = 0.0;

  /**
   * Classification that specifies the use of this item. See the description at the top of the Item entity page for details about supported item types.
   * For requests with minor versions earlier than 4 specified, this field is read-only and system-defined as follows:
   *
   * Inventory--Default setting when TrackQtyOnHand, InvStartDate, and AssetAccountRef are specified.
   * Used for goods the company sells and buys that are tracked as inventory.
   *
   * Service--Default setting when TrackQtyOnHand, InvStartDate, and AssetAccountRef are not specified.
   * Used for non-tangible goods the company sells and buys that are not tracked as inventory. For example, specialized labor, consulting hours, and professional fees.
   *
   * For requests with minor version=4 query parameter, this field is required to be explicitly set with one of the following:
   *
   * Inventory--Used for goods the company sells and buys that are tracked as inventory.
   *
   * Service--Used for non-tangible goods the company sells and buys that are not tracked as inventory.
   * For example, specialized labor, consulting hours, and professional fees.
   *
   * NonInventory--Use for goods the company sells and buys that are not tracked as inventory.
   * For example, office supplies or goods bought on behalf of the customer.
   *
   * When querying Item objects with minor versions earlier than 4 specified, NonInventory types are returned as type Service.
   * @var string
   */
  protected $type = '';

  /**
   * required for Inventory and Service item types
   * Reference to the posting account, that is, the account that records the proceeds from the sale of this item.
   * @var  ReferenceType
   */
  protected $incomeAccountRef = null;
  /** @var string  */
  protected $purchaseDesc = '';
  /** @var bool  */
  protected $isPurchaseTaxInclusive = false;
  // TODO: use Money class
  /** @var float  */
  protected $purchaseCost = 0.0;

  /**
   * required for Inventory, NonInventory, and Service item types
   * Reference to the expense account used to pay the vendor for this item.
   * @var null|ReferenceType
   */
  protected $expenseAccountRef = null;

  /**
   * required for Inventory item types.
   * Reference to the Inventory Asset account that tracks the current value of the inventory.
   * If the same account is used for all inventory items, the current balance of this account will represent
   * the current total value of the inventory.
   * @var null|ReferenceType
   */
  protected $assetAccountRef = null;
}