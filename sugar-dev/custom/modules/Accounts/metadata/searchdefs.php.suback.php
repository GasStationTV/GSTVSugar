<?php
// created: 2013-06-18 21:49:23
$searchdefs['Accounts'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
    'maxColumnsBasic' => '3',
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'label' => 'LBL_NAME',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'phone_office',
        'label' => 'LBL_PHONE_OFFICE',
        'default' => true,
      ),
      2 => 
      array (
        'width' => '10%',
        'label' => 'LBL_SEGMENT',
        'default' => true,
        'name' => 'segment_c',
      ),
      3 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_BILLING_ADDRESS',
        'type' => 'name',
        'group' => 'billing_address_street',
        'default' => true,
      ),
      4 => 
      array (
        'name' => 'billing_address_city',
        'label' => 'LBL_BILLING_ADDRESS_CITY',
        'default' => true,
      ),
      5 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'label' => 'LBL_NAME',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'website',
        'label' => 'LBL_WEBSITE',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'width' => '10%',
        'label' => 'LBL_DMA',
        'default' => true,
        'name' => 'dma_c',
      ),
      5 => 
      array (
        'name' => 'annual_revenue',
        'label' => 'LBL_ANNUAL_REVENUE',
        'default' => true,
      ),
      6 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      7 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'billing_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'name' => 'ticker_symbol',
        'label' => 'LBL_TICKER_SYMBOL',
        'default' => true,
      ),
      11 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      12 => 
      array (
        'width' => '10%',
        'label' => 'LBL_CATEGORY',
        'default' => true,
        'name' => 'category_c',
      ),
      13 => 
      array (
        'width' => '10%',
        'label' => 'LBL_SUBCATEGORY',
        'default' => true,
        'name' => 'subcategory_c',
      ),
      14 => 
      array (
        'width' => '10%',
        'label' => 'LBL_MEMBER_OF',
        'default' => true,
        'name' => 'parent_name',
      ),
    ),
  ),
);