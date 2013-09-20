<?php
// created: 2013-09-19 23:14:15
$dictionary["Account"]["fields"]["agenc_agencies_accounts"] = array (
  'name' => 'agenc_agencies_accounts',
  'type' => 'link',
  'relationship' => 'agenc_agencies_accounts',
  'source' => 'non-db',
  'module' => 'Agenc_Agencies',
  'bean_name' => false,
  'vname' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
  'id_name' => 'agenc_agencies_accountsagenc_agencies_ida',
);
$dictionary["Account"]["fields"]["agenc_agencies_accounts_name"] = array (
  'name' => 'agenc_agencies_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
  'save' => true,
  'id_name' => 'agenc_agencies_accountsagenc_agencies_ida',
  'link' => 'agenc_agencies_accounts',
  'table' => 'agenc_agencies',
  'module' => 'Agenc_Agencies',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["agenc_agencies_accountsagenc_agencies_ida"] = array (
  'name' => 'agenc_agencies_accountsagenc_agencies_ida',
  'type' => 'link',
  'relationship' => 'agenc_agencies_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
