<?php
// created: 2013-07-18 11:13:22
$dictionary["Account"]["fields"]["pcomp_parentcompany_accounts_1"] = array (
  'name' => 'pcomp_parentcompany_accounts_1',
  'type' => 'link',
  'relationship' => 'pcomp_parentcompany_accounts_1',
  'source' => 'non-db',
  'module' => 'PCOMP_ParentCompany',
  'bean_name' => 'PCOMP_ParentCompany',
  'vname' => 'LBL_PCOMP_PARENTCOMPANY_ACCOUNTS_1_FROM_PCOMP_PARENTCOMPANY_TITLE',
  'id_name' => 'pcomp_parentcompany_accounts_1pcomp_parentcompany_ida',
);
$dictionary["Account"]["fields"]["pcomp_parentcompany_accounts_1_name"] = array (
  'name' => 'pcomp_parentcompany_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PCOMP_PARENTCOMPANY_ACCOUNTS_1_FROM_PCOMP_PARENTCOMPANY_TITLE',
  'save' => true,
  'id_name' => 'pcomp_parentcompany_accounts_1pcomp_parentcompany_ida',
  'link' => 'pcomp_parentcompany_accounts_1',
  'table' => 'pcomp_parentcompany',
  'module' => 'PCOMP_ParentCompany',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["pcomp_parentcompany_accounts_1pcomp_parentcompany_ida"] = array (
  'name' => 'pcomp_parentcompany_accounts_1pcomp_parentcompany_ida',
  'type' => 'link',
  'relationship' => 'pcomp_parentcompany_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PCOMP_PARENTCOMPANY_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
