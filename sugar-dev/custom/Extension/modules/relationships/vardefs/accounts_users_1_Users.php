<?php
// created: 2013-07-19 09:35:59
$dictionary["User"]["fields"]["accounts_users_1"] = array (
  'name' => 'accounts_users_1',
  'type' => 'link',
  'relationship' => 'accounts_users_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_users_1accounts_ida',
);
$dictionary["User"]["fields"]["accounts_users_1_name"] = array (
  'name' => 'accounts_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_users_1accounts_ida',
  'link' => 'accounts_users_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["accounts_users_1accounts_ida"] = array (
  'name' => 'accounts_users_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_USERS_1_FROM_ACCOUNTS_TITLE',
);
