<?php
// created: 2013-06-18 18:11:38
$searchdefs['Calls'] = array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'contact_name',
        'label' => 'LBL_CONTACT_NAME',
        'type' => 'name',
      ),
      2 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => false,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'label' => 'LBL_SUBJECT',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'contact_name',
        'label' => 'LBL_CONTACT_NAME',
        'type' => 'name',
        'default' => true,
      ),
      2 => 
      array (
        'width' => '10%',
        'label' => 'LBL_PURPOSE',
        'default' => true,
        'name' => 'purpose_c',
      ),
      3 => 
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
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'status',
        'label' => 'LBL_STATUS',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'width' => '10%',
        'label' => 'LBL_LEIDER',
        'default' => true,
        'name' => 'leider_c',
      ),
      6 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
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
);