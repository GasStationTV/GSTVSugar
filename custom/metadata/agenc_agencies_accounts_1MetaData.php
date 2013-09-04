<?php
// created: 2013-07-18 12:56:18
$dictionary["agenc_agencies_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'agenc_agencies_accounts_1' => 
    array (
      'lhs_module' => 'Agenc_Agencies',
      'lhs_table' => 'agenc_agencies',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'agenc_agencies_accounts_1_c',
      'join_key_lhs' => 'agenc_agencies_accounts_1agenc_agencies_ida',
      'join_key_rhs' => 'agenc_agencies_accounts_1accounts_idb',
    ),
  ),
  'table' => 'agenc_agencies_accounts_1_c',
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
      'name' => 'agenc_agencies_accounts_1agenc_agencies_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'agenc_agencies_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'agenc_agencies_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'agenc_agencies_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'agenc_agencies_accounts_1agenc_agencies_ida',
        1 => 'agenc_agencies_accounts_1accounts_idb',
      ),
    ),
  ),
);