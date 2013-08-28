<?php
$module_name = 'props_Proposals';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'flightenddate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FLIGHTENDDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'flightenddate',
      ),
      'flightstartdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FLIGHTSTARTDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'flightstartdate',
      ),
      'opportunity_no_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_OPPORTUNITY_NO',
        'width' => '10%',
        'name' => 'opportunity_no_c',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
