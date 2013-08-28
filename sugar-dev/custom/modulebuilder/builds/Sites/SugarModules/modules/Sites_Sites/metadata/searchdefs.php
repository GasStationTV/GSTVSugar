<?php
$module_name = 'Sites_Sites';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'document_name' => 
      array (
        'width' => '10%',
        'label' => 'LBL_NAME',
        'default' => true,
        'name' => 'document_name',
      ),
      'site_status' => 
      array (
        'width' => '10%',
        'label' => 'LBL_SITE_STATUS',
        'default' => true,
        'name' => 'site_status',
      ),
    ),
    'advanced_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'label' => 'LBL_NAME',
        'default' => true,
      ),
      'category_id' => 
      array (
        'name' => 'category_id',
        'label' => 'LBL_SF_CATEGORY',
        'default' => true,
      ),
      'subcategory_id' => 
      array (
        'name' => 'subcategory_id',
        'label' => 'LBL_SF_SUBCATEGORY',
        'default' => true,
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'label' => 'LBL_DOC_ACTIVE_DATE',
        'default' => true,
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
        'label' => 'LBL_DOC_EXP_DATE',
        'default' => true,
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
  ),
);
?>
