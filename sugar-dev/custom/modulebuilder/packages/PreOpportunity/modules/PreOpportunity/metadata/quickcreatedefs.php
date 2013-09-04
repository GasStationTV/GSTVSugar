<?php
$module_name = 'gpop_PreOpportunity';
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
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'advertiser',
            'studio' => 'visible',
            'label' => 'LBL_ADVERTISER',
          ),
          1 => 
          array (
            'name' => 'agency',
            'studio' => 'visible',
            'label' => 'LBL_AGENCY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'planner1',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER1',
          ),
          1 => 
          array (
            'name' => 'seller1',
            'studio' => 'visible',
            'label' => 'LBL_SELLER1',
          ),
        ),
      ),
    ),
  ),
);
?>
