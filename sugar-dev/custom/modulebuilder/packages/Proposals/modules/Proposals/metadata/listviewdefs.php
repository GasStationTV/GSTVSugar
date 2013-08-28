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
