<?php
$module_name = 'glog_Log';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'logdate',
            'label' => 'LBL_LOGDATE',
          ),
          1 => 
          array (
            'name' => 'inoutswitch',
            'studio' => 'visible',
            'label' => 'LBL_INOUTSWITCH',
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
            'name' => 'gstvuser1',
            'studio' => 'visible',
            'label' => 'LBL_GSTVUSER1',
          ),
          1 => 
          array (
            'name' => 'gstvuser2',
            'studio' => 'visible',
            'label' => 'LBL_GSTVUSER2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'gstvuser3',
            'studio' => 'visible',
            'label' => 'LBL_GSTVUSER3',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'nextsteps',
            'studio' => 'visible',
            'label' => 'LBL_NEXTSTEPS',
          ),
        ),
      ),
    ),
  ),
);
?>
