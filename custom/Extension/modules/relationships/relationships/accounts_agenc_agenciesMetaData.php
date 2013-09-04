<?php
// created: 2010-05-26 20:53:32
$dictionary["accounts_agenc_agencies"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'accounts_agenc_agencies' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Agenc_Agencies',
      'rhs_table' => 'agenc_agencies',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_agenc_agencies_c',
      'join_key_lhs' => 'accounts_a8ec1ccounts_ida',
      'join_key_rhs' => 'accounts_abaeegencies_idb',
    ),
  ),
  'table' => 'accounts_agenc_agencies_c',
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
      'name' => 'accounts_a8ec1ccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_abaeegencies_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_agenc_agenciesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_agenc_agencies_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_a8ec1ccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_agenc_agencies_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_abaeegencies_idb',
      ),
    ),
  ),
);
?>
