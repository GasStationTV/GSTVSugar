<?php
// created: 2009-08-14 08:17:07
$dictionary["sites_basic_test_sites_sites"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sites_basic_test_sites_sites' => 
    array (
      'lhs_module' => 'Sites_Basic_Test',
      'lhs_table' => 'sites_basic_test',
      'lhs_key' => 'id',
      'rhs_module' => 'Sites_Sites',
      'rhs_table' => 'sites_sites',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sites_basic_sites_sites_c',
      'join_key_lhs' => 'sites_basi3fffic_test_ida',
      'join_key_rhs' => 'sites_basid475s_sites_idb',
    ),
  ),
  'table' => 'sites_basic_sites_sites_c',
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
      'name' => 'sites_basi3fffic_test_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sites_basid475s_sites_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sites_basicst_sites_sitesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sites_basicst_sites_sites_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sites_basi3fffic_test_ida',
        1 => 'sites_basid475s_sites_idb',
      ),
    ),
  ),
);
?>
