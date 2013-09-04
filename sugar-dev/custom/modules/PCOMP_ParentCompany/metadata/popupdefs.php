<?php
$popupMeta = array (
    'moduleMain' => 'PCOMP_ParentCompany',
    'varName' => 'PCOMP_ParentCompany',
    'orderBy' => 'pcomp_parentcompany.name',
    'whereClauses' => array (
  'name' => 'pcomp_parentcompany.name',
  'favorites_only' => 'pcomp_parentcompany.favorites_only',
),
    'searchInputs' => array (
  0 => 'name',
  9 => 'favorites_only',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
),
);
