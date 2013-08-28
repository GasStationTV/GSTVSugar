<?php
// created: 2013-06-18 19:49:02
$searchdefs = array (
  'Agenc_Agencies' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '3',
      'widths' => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'layout' => 
    array (
      'basic_search' => 
      array (
        0 => 'name',
        1 => 'billing_address_city',
        2 => 'phone_office',
        3 => 
        array (
          'name' => 'address_street',
          'label' => 'LBL_BILLING_ADDRESS',
          'type' => 'name',
          'group' => 'billing_address_street',
        ),
        4 => 
        array (
          'name' => 'current_user_only',
          'label' => 'LBL_CURRENT_USER_FILTER',
          'type' => 'bool',
        ),
        'favorites_only' => 
        array (
          'name' => 'favorites_only',
          'label' => 'LBL_FAVORITES_FILTER',
          'type' => 'bool',
        ),
      ),
      'advanced_search' => 
      array (
        0 => 'name',
        1 => 
        array (
          'name' => 'address_street',
          'label' => 'LBL_ANY_ADDRESS',
          'type' => 'name',
        ),
        2 => 
        array (
          'name' => 'phone',
          'label' => 'LBL_ANY_PHONE',
          'type' => 'name',
        ),
        3 => 'website',
        4 => 
        array (
          'name' => 'address_city',
          'label' => 'LBL_CITY',
          'type' => 'name',
        ),
        5 => 
        array (
          'name' => 'email',
          'label' => 'LBL_ANY_EMAIL',
          'type' => 'name',
        ),
        6 => 'annual_revenue',
        7 => 
        array (
          'name' => 'address_state',
          'label' => 'LBL_STATE',
          'type' => 'name',
        ),
        8 => 'employees',
        9 => 'industry',
        10 => 
        array (
          'name' => 'address_postalcode',
          'label' => 'LBL_POSTAL_CODE',
          'type' => 'name',
        ),
        11 => 'ticker_symbol',
        12 => 'agenc_agencies_type',
        13 => 
        array (
          'name' => 'address_country',
          'label' => 'LBL_COUNTRY',
          'type' => 'name',
        ),
        14 => 'rating',
        15 => 
        array (
          'name' => 'assigned_user_id',
          'type' => 'enum',
          'label' => 'LBL_ASSIGNED_TO',
          'function' => 
          array (
            'name' => 'get_user_array',
            'params' => 
            array (
              0 => false,
            ),
          ),
        ),
        16 => 'ownership',
        'favorites_only' => 
        array (
          'name' => 'favorites_only',
          'label' => 'LBL_FAVORITES_FILTER',
          'type' => 'bool',
        ),
      ),
    ),
  ),
  'Sites_Site_Database_Test1' => 
  array (
    'layout' => 
    array (
      'basic_search' => 
      array (
        'document_name' => 
        array (
          'width' => '10%',
          'label' => 'LBL_NAME',
          'default' => true,
          'name' => 'document_name',
        ),
        'site_status' => 
        array (
          'width' => '10%',
          'label' => 'LBL_SITE_STATUS',
          'default' => true,
          'name' => 'site_status',
        ),
        'favorites_only' => 
        array (
          'name' => 'favorites_only',
          'label' => 'LBL_FAVORITES_FILTER',
          'type' => 'bool',
        ),
      ),
      'advanced_search' => 
      array (
        'document_name' => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_NAME',
          'default' => true,
        ),
        'category_id' => 
        array (
          'name' => 'category_id',
          'label' => 'LBL_SF_CATEGORY',
          'default' => true,
        ),
        'subcategory_id' => 
        array (
          'name' => 'subcategory_id',
          'label' => 'LBL_SF_SUBCATEGORY',
          'default' => true,
        ),
        'active_date' => 
        array (
          'name' => 'active_date',
          'label' => 'LBL_DOC_ACTIVE_DATE',
          'default' => true,
        ),
        'exp_date' => 
        array (
          'name' => 'exp_date',
          'label' => 'LBL_DOC_EXP_DATE',
          'default' => true,
        ),
        'favorites_only' => 
        array (
          'name' => 'favorites_only',
          'label' => 'LBL_FAVORITES_FILTER',
          'type' => 'bool',
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
    ),
  ),
);
?>
