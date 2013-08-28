<?php
// created: 2009-08-14 08:43:32
$layout_defs["Accounts"]["subpanel_setup"]["accounts_accounts"] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_R_TITLE',
  'get_subpanel_data' => 'accounts_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Accounts',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
<?php
// created: 2010-05-26 20:53:32
$layout_defs["Accounts"]["subpanel_setup"]["accounts_agenc_agencies"] = array (
  'order' => 100,
  'module' => 'Agenc_Agencies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AGENC_AGENCIES_FROM_AGENC_AGENCIES_TITLE',
  'get_subpanel_data' => 'accounts_agenc_agencies',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Agenc_Agencies',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
