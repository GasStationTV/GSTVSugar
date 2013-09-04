<?php
$popupMeta = array (
    'moduleMain' => 'props_Proposals',
    'varName' => 'props_Proposals',
    'orderBy' => 'props_proposals.name',
    'whereClauses' => array (
  'name' => 'props_proposals.name',
  'flightstartdate' => 'props_proposals.flightstartdate',
  'flightenddate' => 'props_proposals.flightenddate',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'flightstartdate',
  5 => 'flightenddate',
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
  'flightstartdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FLIGHTSTARTDATE',
    'width' => '10%',
    'name' => 'flightstartdate',
  ),
  'flightenddate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FLIGHTENDDATE',
    'width' => '10%',
    'name' => 'flightenddate',
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
),
);
