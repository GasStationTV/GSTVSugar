<?php
// created: 2013-06-18 18:11:58
$viewdefs['Quotes']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'form' => 
    array (
      'footerTpl' => 'modules/Quotes/tpls/EditViewFooter.tpl',
    ),
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_BILL_TO' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_ADDRESS_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'opportunity_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'quote_num',
          'type' => 'readonly',
          'displayParams' => 
          array (
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'quote_stage',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      2 => 
      array (
        0 => 'purchase_order_num',
        1 => 
        array (
          'name' => 'date_quote_expected_closed',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      3 => 
      array (
        0 => 'payment_terms',
        1 => 'original_po_date',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'team_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => '',
      ),
      5 => 
      array (
        0 => 'assigned_user_name',
      ),
    ),
    'lbl_bill_to' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'billing_account_name',
          'displayParams' => 
          array (
            'key' => 
            array (
              0 => 'billing',
              1 => 'shipping',
            ),
            'copy' => 
            array (
              0 => 'billing',
              1 => 'shipping',
            ),
            'billingKey' => 'billing',
            'shippingKey' => 'shipping',
            'copyPhone' => false,
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_account_name',
          'displayParams' => 
          array (
            'key' => 'shipping',
            'copy' => 'shipping',
            'shippingKey' => 'shipping',
            'copyPhone' => false,
          ),
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'billing_contact_name',
        ),
        1 => 
        array (
          'name' => 'shipping_contact_name',
        ),
      ),
    ),
    'lbl_address_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'shipping',
            'copy' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
      ),
    ),
  ),
);