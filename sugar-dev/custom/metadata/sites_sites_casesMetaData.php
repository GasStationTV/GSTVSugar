<?php
// created: 2009-11-24 15:23:21
$dictionary["sites_sites_cases"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sites_sites_cases' => 
    array (
      'lhs_module' => 'Sites_Sites',
      'lhs_table' => 'sites_sites',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sites_sites_cases_c',
      'join_key_lhs' => 'sites_siteeef4s_sites_ida',
      'join_key_rhs' => 'sites_sitefc4eescases_idb',
    ),
  ),
  'table' => 'sites_sites_cases_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sites_siteeef4s_sites_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sites_sitefc4eescases_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sites_sites_casesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sites_sites_cases_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sites_siteeef4s_sites_ida',
        1 => 'sites_sitefc4eescases_idb',
      ),
    ),
  ),
);
?>
