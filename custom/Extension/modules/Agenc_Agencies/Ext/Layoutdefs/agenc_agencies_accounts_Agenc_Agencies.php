<?php
 // created: 2013-09-19 23:14:15
$layout_defs["Agenc_Agencies"]["subpanel_setup"]['agenc_agencies_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'agenc_agencies_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
