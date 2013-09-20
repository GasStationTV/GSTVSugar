<?php
$listViewDefs ['Opportunities'] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
  ),
  'PROJ_AMOUNT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PROJ_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CLOSEDAMOUNT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_CLOSEDAMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'OPPORTUNITY_STAGE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_OPPORTUNITY_STAGE',
    'width' => '10%',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'link' => true,
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'contextMenu' => 
    array (
      'objectType' => 'sugarAccount',
      'metaData' => 
      array (
        'return_module' => 'Contacts',
        'return_action' => 'ListView',
        'module' => 'Accounts',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'account_id' => '{$ACCOUNT_ID}',
        'account_name' => '{$ACCOUNT_NAME}',
      ),
    ),
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'ACCOUNT_MANAGER_NAME_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT_MANAGER_NAME',
    'width' => '10%',
  ),
  'PRIMARY_AE_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_AE',
    'default' => true,
  ),
  'TRACKING_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TRACKING_NUMBER_C',
    'width' => '10%',
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'ACCOUNT_NAME_2_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ACCOUNT_NAME_2',
    'default' => false,
  ),
  'ACCOUNT_NAME_3_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ACCOUNT_NAME_3',
    'default' => false,
  ),
  'RELATED_ACCOUNT_2_TYPE_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_RELATED_ACCOUNT_2_TYPE',
    'default' => false,
  ),
  'RELATED_ACCOUNT_3_TYPE_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_RELATED_ACCOUNT_3_TYPE',
    'default' => false,
  ),
  'ACCOUNT_NAME_1_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ACCOUNT_NAME_1',
    'default' => false,
  ),
  'FLIGHT_START_DATE_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_FLIGHT_START_DATE',
    'default' => false,
  ),
  'FLIGHT_END_DATE_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_FLIGHT_END_DATE',
    'default' => false,
  ),
  'PROBABILITY_DROPDOWN_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY_DROPDOWN',
    'default' => false,
  ),
);
?>
