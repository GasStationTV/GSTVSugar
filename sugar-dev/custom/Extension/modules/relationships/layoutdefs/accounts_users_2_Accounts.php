<?php
 // created: 2013-08-05 15:45:23
$layout_defs["Accounts"]["subpanel_setup"]['accounts_users_2'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_USERS_2_FROM_USERS_TITLE',
  'get_subpanel_data' => 'accounts_users_2',
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
