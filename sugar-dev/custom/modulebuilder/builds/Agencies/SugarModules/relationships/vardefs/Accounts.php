<?php
// created: 2010-05-26 21:45:32
$dictionary["Account"]["fields"]["agenc_agencies_accounts"] = array (
  'name' => 'agenc_agencies_accounts',
  'type' => 'link',
  'relationship' => 'agenc_agencies_accounts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
);
?>
<?php
// created: 2010-05-26 21:45:32
$dictionary["Account"]["fields"]["agenc_agencies_accounts_name"] = array (
  'name' => 'agenc_agencies_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
  'save' => true,
  'id_name' => 'agenc_agena415gencies_ida',
  'link' => 'agenc_agencies_accounts',
  'table' => 'agenc_agencies',
  'module' => 'Agenc_Agencies',
  'rname' => 'name',
);
?>
<?php
// created: 2010-05-26 21:45:32
$dictionary["Account"]["fields"]["agenc_agena415gencies_ida"] = array (
  'name' => 'agenc_agena415gencies_ida',
  'type' => 'link',
  'relationship' => 'agenc_agencies_accounts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
);
?>
