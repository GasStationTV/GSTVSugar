<?php
// created: 2010-05-27 04:25:55
$dictionary["agenc_agencies_accounts_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'agenc_agencies_accounts_2' => 
    array (
      'lhs_module' => 'Agenc_Agencies',
      'lhs_table' => 'agenc_agencies',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'agenc_agencs_accounts_2_c',
      'join_key_lhs' => 'agenc_agende85gencies_ida',
      'join_key_rhs' => 'agenc_agena474ccounts_idb',
    ),
  ),
  'table' => 'agenc_agencs_accounts_2_c',
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
      'name' => 'agenc_agende85gencies_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'agenc_agena474ccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'agenc_agencies_accounts_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'agenc_agencies_accounts_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'agenc_agende85gencies_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'agenc_agencies_accounts_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'agenc_agena474ccounts_idb',
      ),
    ),
  ),
);
?>
