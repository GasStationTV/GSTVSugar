<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'parentcompany_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PARENTCOMPANY',
        'id' => 'PCOMP_PARENTCOMPANY_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'parentcompany_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'account_manager_name_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT_MANAGER_NAME',
        'width' => '10%',
        'name' => 'account_manager_name_c',
      ),
      'seller1_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SELLER1',
        'width' => '10%',
        'name' => 'seller1_c',
      ),
      'dma_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'width' => '10%',
        'label' => 'LBL_DMA',
        'name' => 'dma_c',
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
);
?>
