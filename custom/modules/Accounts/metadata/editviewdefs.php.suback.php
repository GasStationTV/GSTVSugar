<?php
// created: 2013-06-18 21:49:23
$viewdefs['Accounts']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
      ),
    ),
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
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/Accounts/Account.js',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_account_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'phone_office',
          'label' => 'LBL_PHONE_OFFICE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'focus_account_c',
          'label' => 'LBL_FOCUS_ACCOUNT',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
          'label' => 'LBL_FAX',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'link',
          'label' => 'LBL_WEBSITE',
        ),
        1 => 
        array (
          'name' => 'phone_alternate',
          'label' => 'LBL_OTHER_PHONE',
        ),
      ),
      3 => 
      array (
        0 => 'parent_name',
        1 => 'ticker_symbol',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'category_c',
          'label' => 'LBL_CATEGORY',
        ),
        1 => 
        array (
          'name' => 'dma_c',
          'label' => 'LBL_DMA',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'subcategory_c',
          'label' => 'LBL_SUBCATEGORY',
        ),
        1 => 'annual_revenue',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
        1 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_LIST_TEAM',
          'displayParams' => 
          array (
            'display' => true,
          ),
        ),
      ),
      7 => 
      array (
        0 => 'campaign_name',
      ),
    ),
    'lbl_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_11_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_11_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_12_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_12_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_9_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_9_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_10_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_10_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_13_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_13_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_14_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_14_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_3_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_3_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_4_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_4_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_5_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_5_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      10 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_6_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_6_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      11 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_7_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_7_FROM_AGENC_AGENCIES_TITLE',
        ),
      ),
      12 => 
      array (
        0 => 
        array (
          'name' => 'agenc_agencies_accounts_8_name',
          'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_8_FROM_AGENC_AGENCIES_TITLE',
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
          'label' => 'LBL_BILLING_ADDRESS_STREET',
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
          'label' => 'LBL_SHIPPING_ADDRESS_STREET',
        ),
      ),
    ),
    'lbl_description_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);