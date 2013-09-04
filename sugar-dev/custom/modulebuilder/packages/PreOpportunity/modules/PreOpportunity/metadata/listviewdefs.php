<?php
$module_name = 'gpop_PreOpportunity';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'ADVERTISER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ADVERTISER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'AGENCY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AGENCY',
    'id' => 'AGENC_AGENCIES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'SELLER1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SELLER1',
    'width' => '10%',
    'default' => true,
  ),
  'PLANNER1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PLANNER1',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
