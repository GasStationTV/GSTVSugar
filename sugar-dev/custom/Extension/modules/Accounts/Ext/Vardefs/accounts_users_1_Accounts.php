<?php
// created: 2013-07-19 09:35:59
$dictionary["Account"]["fields"]["accounts_users_1"] = array (
  'name' => 'accounts_users_1',
  'type' => 'link',
  'relationship' => 'accounts_users_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_USERS_TITLE',
  'id_name' => 'accounts_users_1users_idb',
);
$dictionary["Account"]["fields"]["accounts_users_1_name"] = array (
  'name' => 'accounts_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'accounts_users_1users_idb',
  'link' => 'accounts_users_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["accounts_users_1users_idb"] = array (
  'name' => 'accounts_users_1users_idb',
  'type' => 'link',
  'relationship' => 'accounts_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_USERS_TITLE',
);
