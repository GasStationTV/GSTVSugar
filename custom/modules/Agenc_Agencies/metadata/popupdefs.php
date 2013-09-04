<?php
$popupMeta = array (
    'moduleMain' => 'Agenc_Agencies',
    'varName' => 'Agenc_Agencies',
    'orderBy' => 'agenc_agencies.name',
    'whereClauses' => array (
  'name' => 'agenc_agencies.name',
  'address_street' => 'agenc_agencies.address_street',
  'phone' => 'agenc_agencies.phone',
  'website' => 'agenc_agencies.website',
  'address_city' => 'agenc_agencies.address_city',
  'email' => 'agenc_agencies.email',
  'address_state' => 'agenc_agencies.address_state',
  'employees' => 'agenc_agencies.employees',
  'industry' => 'agenc_agencies.industry',
  'address_postalcode' => 'agenc_agencies.address_postalcode',
  'agenc_agencies_type' => 'agenc_agencies.agenc_agencies_type',
  'address_country' => 'agenc_agencies.address_country',
  'rating' => 'agenc_agencies.rating',
  'assigned_user_id' => 'agenc_agencies.assigned_user_id',
  'ownership' => 'agenc_agencies.ownership',
  'favorites_only' => 'agenc_agencies.favorites_only',
),
    'searchInputs' => array (
  0 => 'name',
  3 => 'industry',
  4 => 'address_street',
  5 => 'phone',
  6 => 'website',
  7 => 'address_city',
  8 => 'email',
  9 => 'address_state',
  10 => 'employees',
  11 => 'address_postalcode',
  12 => 'agenc_agencies_type',
  13 => 'address_country',
  14 => 'rating',
  15 => 'assigned_user_id',
  16 => 'ownership',
  17 => 'favorites_only',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'address_street' => 
  array (
    'name' => 'address_street',
    'label' => 'LBL_ANY_ADDRESS',
    'type' => 'name',
    'width' => '10%',
  ),
  'phone' => 
  array (
    'name' => 'phone',
    'label' => 'LBL_ANY_PHONE',
    'type' => 'name',
    'width' => '10%',
  ),
  'website' => 
  array (
    'name' => 'website',
    'width' => '10%',
  ),
  'address_city' => 
  array (
    'name' => 'address_city',
    'label' => 'LBL_CITY',
    'type' => 'name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'label' => 'LBL_ANY_EMAIL',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_state' => 
  array (
    'name' => 'address_state',
    'label' => 'LBL_STATE',
    'type' => 'name',
    'width' => '10%',
  ),
  'employees' => 
  array (
    'name' => 'employees',
    'width' => '10%',
  ),
  'industry' => 
  array (
    'name' => 'industry',
    'width' => '10%',
  ),
  'agenc_agencies_type' => 
  array (
    'name' => 'agenc_agencies_type',
    'width' => '10%',
  ),
  'address_postalcode' => 
  array (
    'name' => 'address_postalcode',
    'label' => 'LBL_POSTAL_CODE',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_country' => 
  array (
    'name' => 'address_country',
    'label' => 'LBL_COUNTRY',
    'type' => 'name',
    'width' => '10%',
  ),
  'rating' => 
  array (
    'name' => 'rating',
    'width' => '10%',
  ),
  'assigned_user_id' => 
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
    'width' => '10%',
  ),
  'ownership' => 
  array (
    'name' => 'ownership',
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
);
