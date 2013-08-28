<?php
$module_name = 'props_Proposals';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'tracking_number_c',
            'label' => 'LBL_TRACKING_NUMBER_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'proposalneededby',
            'label' => 'LBL_PROPOSALNEEDEDBY',
          ),
          1 => 
          array (
            'name' => 'proposalamount',
            'label' => 'LBL_PROPOSALAMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'flightstartdate',
            'label' => 'LBL_FLIGHTSTARTDATE',
          ),
          1 => 
          array (
            'name' => 'flightenddate',
            'label' => 'LBL_FLIGHTENDDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'spotlength1',
            'studio' => 'visible',
            'label' => 'LBL_SPOTLENGTH1',
          ),
          1 => 
          array (
            'name' => 'gstv_dmas',
            'studio' => 'visible',
            'label' => 'LBL_GSTV_DMAS',
          ),
        ),
      ),
    ),
  ),
);
?>
