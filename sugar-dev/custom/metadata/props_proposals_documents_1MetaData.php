<?php
// created: 2013-08-08 09:23:21
$dictionary["props_proposals_documents_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'props_proposals_documents_1' => 
    array (
      'lhs_module' => 'props_Proposals',
      'lhs_table' => 'props_proposals',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'props_proposals_documents_1_c',
      'join_key_lhs' => 'props_proposals_documents_1props_proposals_ida',
      'join_key_rhs' => 'props_proposals_documents_1documents_idb',
    ),
  ),
  'table' => 'props_proposals_documents_1_c',
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
      'name' => 'props_proposals_documents_1props_proposals_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'props_proposals_documents_1documents_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'props_proposals_documents_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'props_proposals_documents_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'props_proposals_documents_1props_proposals_ida',
        1 => 'props_proposals_documents_1documents_idb',
      ),
    ),
  ),
);