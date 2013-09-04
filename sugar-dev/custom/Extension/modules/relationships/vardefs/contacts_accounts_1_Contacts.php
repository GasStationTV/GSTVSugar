<?php
// created: 2013-06-20 12:41:40
$dictionary["Contact"]["fields"]["contacts_accounts_1"] = array (
  'name' => 'contacts_accounts_1',
  'type' => 'link',
  'relationship' => 'contacts_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'contacts_accounts_1accounts_idb',
);
$dictionary["Contact"]["fields"]["contacts_accounts_1_name"] = array (
  'name' => 'contacts_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_accounts_1accounts_idb',
  'link' => 'contacts_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["contacts_accounts_1accounts_idb"] = array (
  'name' => 'contacts_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'contacts_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
