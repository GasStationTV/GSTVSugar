<?php
 // created: 2013-09-19 21:47:45
$layout_defs["Opportunities"]["subpanel_setup"]['props_proposals_opportunities'] = array (
  'order' => 100,
  'module' => 'props_Proposals',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROPS_PROPOSALS_OPPORTUNITIES_FROM_PROPS_PROPOSALS_TITLE',
  'get_subpanel_data' => 'props_proposals_opportunities',
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
