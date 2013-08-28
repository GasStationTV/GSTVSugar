<?php
 // created: 2013-08-02 08:14:10
$layout_defs["Agenc_Agencies"]["subpanel_setup"]['contacts_agenc_agencies_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AGENC_AGENCIES_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'contacts_agenc_agencies_1',
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
