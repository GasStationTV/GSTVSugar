<?php
$module_name = 'gpop_PreOpportunity';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
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
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 'description',
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'planner2',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER2',
          ),
          1 => 
          array (
            'name' => 'seller2',
            'studio' => 'visible',
            'label' => 'LBL_SELLER2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'planner3',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER3',
          ),
          1 => 
          array (
            'name' => 'seller3',
            'studio' => 'visible',
            'label' => 'LBL_SELLER3',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'planner4',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER4',
          ),
          1 => 
          array (
            'name' => 'seller4',
            'studio' => 'visible',
            'label' => 'LBL_SELLER4',
          ),
        ),
      ),
    ),
  ),
);
?>
