<?php
$popupMeta = array (
    'moduleMain' => 'gpop_PreOpportunity',
    'varName' => 'gpop_PreOpportunity',
    'orderBy' => 'gpop_preopportunity.name',
    'whereClauses' => array (
  'name' => 'gpop_preopportunity.name',
  'advertiser' => 'gpop_preopportunity.advertiser',
  'agency' => 'gpop_preopportunity.agency',
  'status' => 'gpop_preopportunity.status',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'advertiser',
  5 => 'agency',
  6 => 'status',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'status' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'advertiser' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ADVERTISER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'advertiser',
  ),
  'agency' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AGENCY',
    'id' => 'AGENC_AGENCIES_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'agency',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
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
),
);
