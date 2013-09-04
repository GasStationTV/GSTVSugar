<?php
$dashletData['gpop_PreOpportunityDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
);
$dashletData['gpop_PreOpportunityDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'advertiser' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ADVERTISER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'agency' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AGENCY',
    'id' => 'AGENC_AGENCIES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'seller1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SELLER1',
    'width' => '10%',
    'default' => true,
  ),
  'planner1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PLANNER1',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
