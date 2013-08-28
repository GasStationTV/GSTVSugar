<?php
$module_name = 'props_Proposals';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PROPOSALNEEDEDBY' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PROPOSALNEEDEDBY',
    'width' => '10%',
    'default' => true,
  ),
  'PROPOSALAMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PROPOSALAMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'FLIGHTSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FLIGHTSTARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'FLIGHTENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FLIGHTENDDATE',
    'width' => '10%',
    'default' => true,
  ),
  'OPPORTUNITY_NO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OPPORTUNITY_NO',
    'width' => '10%',
  ),
  'TRACKING_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TRACKING_NUMBER_C',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
