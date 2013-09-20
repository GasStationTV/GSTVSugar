<?php
// created: 2013-09-19 21:47:45
$dictionary["props_proposals_opportunities"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'props_proposals_opportunities' => 
    array (
      'lhs_module' => 'props_Proposals',
      'lhs_table' => 'props_proposals',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'props_proposals_opportunities_c',
      'join_key_lhs' => 'props_proposals_opportunitiesprops_proposals_ida',
      'join_key_rhs' => 'props_proposals_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'props_proposals_opportunities_c',
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
      'name' => 'props_proposals_opportunitiesprops_proposals_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'props_proposals_opportunitiesopportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'props_proposals_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'props_proposals_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'props_proposals_opportunitiesprops_proposals_ida',
        1 => 'props_proposals_opportunitiesopportunities_idb',
      ),
    ),
  ),
);