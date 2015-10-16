<?php

namespace phpqbo\Entities\Types;

use phpqbo\Entities\Type;

/**
 * Class LinkedTxnType
 * @package phpqbo\Entities\Types
 */
class LinkedTxnType extends Type
{
  /** @var string  */
  protected $txnId = '';
  /** @var  TxnTypeEnum */
  protected $txnType;
  /** @var string  */
  protected $txnLineId = '';
}

/**
 * Class TxnTypeEnum
 * @package phpqbo\Entities\Types
 */
class TxnTypeEnum
{
  const AP_CREDITCARD           = 'APCreditCard';
  const AR_REFUND_CREDITCARD    = 'ARRefundCreditCard';
  const BILL                    = 'Bill';
  const BILL_PAYMENT_CHECK      = 'BillPaymentCheck';
  const BUILD_ASSEMBLY          = 'BuildAssembly';
  const CARRY_OVER              = 'CarryOver';
  const CASH_PURCHASE           = 'CashPurchase';
  const CHARGE                  = 'Charge';
  const CHECK                   = 'Check';
  const CREDIT_MEMO             = 'CreditMemo';
  const DEPOSIT                 = 'Deposit';
  const EFPLIABILITY_CHECK      = 'EFPLiabilityCheck';
  const EFT_BILL_PAYMENT        = 'EFTBillPayment';
  const EFT_REFUND              = 'EFTRefund';
  const ESTIMATE                = 'Estimate';
  const INVENTORY_ADJUSTMENT    = 'InventoryAdjustment';
  const INVENTORY_TRANSFER      = 'InventoryTransfer';
  const INVOICE                 = 'Invoice';
  const ITEM_RECEIPT            = 'ItemReceipt';
  const JOURNAL_ENTRY           = 'JournalEntry';
  const LIABILITY_ADJUSTMENT    = 'LiabilityAdjustment';
  const PAYCHECK                = 'Paycheck';
  const PAYROLL_LIABILITY_CHECK = 'PayrollLiabilityCheck';
  const PURCHASE                = 'Purchase';
  const PURCHASE_ORDER          = 'PurchaseOrder';
  const PRIOR_PAYMENT           = 'PriorPayment';
  const RECEIVE_PAYMENT         = 'ReceivePayment';
  const REFUND_CHECK            = 'RefundCheck';
  const REFUND_RECEIPT          = 'RefundReceipt';
  const SALES_ORDER             = 'SalesOrder';
  const SALES_RECEIPT           = 'SalesReceipt';
  const SALES_TAX_PAYMENT_CHECK = 'SalesTaxPaymentCheck';
  const TRANSFER                = 'Transfer';
  const TIME_ACTIVITY           = 'TimeActivity';
  const VENDOR_CREDIT           = 'VendorCredit';
  const YTD_ADJUSTMENT          = 'YTDAdjustment';
}


