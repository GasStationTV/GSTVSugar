<?php
$module_name = 'Sites_Site_Database_Test1';
$_object_name = 'sites_site_database_test1';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_NAME',
          ),
          1 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'site_status',
            'label' => 'LBL_SITE_STATUS',
          ),
          1 => NULL,
        ),
      ),
    ),
  ),
);
?>
