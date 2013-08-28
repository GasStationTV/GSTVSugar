<?php
// created: 2013-06-18 21:49:23
$searchdefs['Opportunities'] = array (
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
        'label' => 'LBL_OPPORTUNITY_NAME',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'width' => '10%',
        'label' => 'LBL_GSTV_DMAS',
        'default' => true,
        'name' => 'gstv_dmas_c',
      ),
      2 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'width' => '10%',
        'label' => 'LBL_TEAM',
        'default' => true,
        'name' => 'team_name',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'label' => 'LBL_OPPORTUNITY_NAME',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'width' => '10%',
        'label' => 'LBL_FLIGHT_START_DATE',
        'default' => true,
        'name' => 'flight_start_date_c',
      ),
      2 => 
      array (
        'width' => '10%',
        'label' => 'LBL_FLIGHT_END_DATE',
        'default' => true,
        'name' => 'flight_end_date_c',
      ),
      3 => 
      array (
        'width' => '10%',
        'label' => 'LBL_SUBCATEGORY',
        'default' => true,
        'name' => 'subcategory_c',
      ),
      4 => 
      array (
        'width' => '10%',
        'label' => 'LBL_GSTV_DMAS',
        'default' => true,
        'name' => 'gstv_dmas_c',
      ),
      5 => 
      array (
        'name' => 'amount',
        'label' => 'LBL_AMOUNT',
        'default' => true,
        'currency_format' => true,
        'width' => '10%',
      ),
      6 => 
      array (
        'name' => 'account_name',
        'label' => 'LBL_ACCOUNT_NAME',
        'default' => true,
        'width' => '10%',
      ),
      7 => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRIMARY_ACCOUNT_TYPE',
        'default' => true,
        'name' => 'primary_account_type_c',
      ),
      8 => 
      array (
        'width' => '10%',
        'label' => 'LBL_BRAND',
        'default' => true,
        'name' => 'brand_c',
      ),
      9 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ACCOUNT_EXEC_1',
        'default' => true,
        'name' => 'account_exec_1_c',
      ),
      10 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ACCOUNT_EXEC_2',
        'default' => true,
        'name' => 'account_exec_2_c',
      ),
      11 => 
      array (
        'width' => '10%',
        'label' => 'LBL_CLIENT_AE',
        'default' => true,
        'name' => 'client_ae_c',
      ),
      12 => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRIMARY_AE',
        'default' => true,
        'name' => 'primary_ae_c',
      ),
      13 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ACCOUNT_NAME_1',
        'default' => true,
        'name' => 'account_name_1_c',
      ),
      14 => 
      array (
        'width' => '10%',
        'label' => 'LBL_RELATED_ACCOUNT_1_TYPE',
        'default' => true,
        'name' => 'related_account_1_type_c',
      ),
      15 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ACCOUNT_MANAGER_NAME',
        'default' => true,
        'name' => 'account_manager_name_c',
      ),
      16 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ACCOUNT_NAME_2',
        'default' => true,
        'name' => 'account_name_2_c',
      ),
      17 => 
      array (
        'width' => '10%',
        'label' => 'LBL_RELATED_ACCOUNT_2_TYPE',
        'default' => true,
        'name' => 'related_account_2_type_c',
      ),
      18 => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRODUCT',
        'default' => true,
        'name' => 'product_c',
      ),
      19 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ACCOUNT_NAME_3',
        'default' => true,
        'name' => 'account_name_3_c',
      ),
      20 => 
      array (
        'width' => '10%',
        'label' => 'LBL_RELATED_ACCOUNT_3_TYPE',
        'default' => true,
        'name' => 'related_account_3_type_c',
      ),
      21 => 
      array (
        'name' => 'lead_source',
        'label' => 'LBL_LEAD_SOURCE',
        'default' => true,
        'width' => '10%',
      ),
      22 => 
      array (
        'name' => 'sales_stage',
        'label' => 'LBL_SALES_STAGE',
        'default' => true,
        'width' => '10%',
      ),
      23 => 
      array (
        'width' => '10%',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      24 => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRIORITY',
        'default' => true,
        'name' => 'priority_c',
      ),
      25 => 
      array (
        'width' => '10%',
        'label' => 'LBL_CREATED',
        'default' => true,
        'name' => 'created_by_name',
      ),
      26 => 
      array (
        'width' => '10%',
        'label' => 'LBL_DIVISION',
        'default' => true,
        'name' => 'division_c',
      ),
      27 => 
      array (
        'width' => '10%',
        'label' => 'LBL_TEAMS',
        'default' => true,
        'name' => 'team_name',
      ),
    ),
  ),
);