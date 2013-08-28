<?php
// created: 2013-06-18 18:11:58
$viewdefs['Opportunities']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'javascript' => '{$PROBABILITY_SCRIPT}',
    'tabDefs' => 
    array (
      'LBL_PANEL4' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL3' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL5' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL2' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_panel4' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
          'label' => 'LBL_OPPORTUNITY_NAME',
        ),
        1 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_SALES_STAGE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'account_exec_1_c',
          'label' => 'LBL_ACCOUNT_EXEC_1',
        ),
        1 => 
        array (
          'name' => 'account_manager_name_c',
          'label' => 'LBL_ACCOUNT_MANAGER_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'account_exec_2_c',
          'label' => 'LBL_ACCOUNT_EXEC_2',
        ),
        1 => 
        array (
          'name' => 'priority_c',
          'label' => 'LBL_PRIORITY',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
        1 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'division_c',
          'label' => 'LBL_DIVISION',
        ),
        1 => NULL,
      ),
    ),
    'lbl_panel3' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
        ),
        1 => NULL,
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'brand_c',
          'label' => 'LBL_BRAND',
        ),
        1 => 
        array (
          'name' => 'product_c',
          'label' => 'LBL_PRODUCT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'restrictions_c',
          'label' => 'LBL_RESTRICTIONS',
        ),
        1 => NULL,
      ),
    ),
    'lbl_panel5' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'client_direct_c',
          'label' => 'LBL_CLIENT_DIRECT',
        ),
        1 => NULL,
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'account_name_1_c',
          'label' => 'LBL_ACCOUNT_NAME_1',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'related_account_1_type_c',
          'label' => 'LBL_RELATED_ACCOUNT_1_TYPE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'account_name_2_c',
          'label' => 'LBL_ACCOUNT_NAME_2',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'related_account_2_type_c',
          'label' => 'LBL_RELATED_ACCOUNT_2_TYPE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'account_name_3_c',
          'label' => 'LBL_ACCOUNT_NAME_3',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'related_account_3_type_c',
          'label' => 'LBL_RELATED_ACCOUNT_3_TYPE',
        ),
      ),
    ),
    'lbl_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'proposal_needed_date_c',
          'label' => 'LBL_PROPOSAL_NEEDED_DATE',
        ),
        1 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'amount',
          'displayParams' => 
          array (
            'required' => true,
          ),
          'label' => 'LBL_AMOUNT',
        ),
        1 => 
        array (
          'name' => 'probability_dropdown_c',
          'label' => 'LBL_PROBABILITY_DROPDOWN',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'proj_amount_c',
          'label' => 'LBL_PROJ_AMOUNT',
        ),
        1 => NULL,
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'flight_start_date_c',
          'label' => 'LBL_FLIGHT_START_DATE',
        ),
        1 => 
        array (
          'name' => 'flight_end_date_c',
          'label' => 'LBL_FLIGHT_END_DATE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'spot_length_c',
          'label' => 'LBL_SPOT_LENGTH',
        ),
        1 => NULL,
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'rate_c',
          'label' => 'LBL_RATE',
        ),
        1 => NULL,
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'spot_length_2_c',
          'label' => 'LBL_SPOT_LENGTH_2',
        ),
        1 => NULL,
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'cpm_rate_2_c',
          'label' => 'LBL_CPM_RATE_2',
        ),
        1 => NULL,
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'gstv_dmas_c',
          'label' => 'LBL_GSTV_DMAS',
        ),
        1 => 
        array (
          'name' => 'component_items_c',
          'label' => 'LBL_COMPONENT_ITEMS',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'additional_program_details_c',
          'label' => 'LBL_ADDITIONAL_PROGRAM_DETAILS',
        ),
      ),
    ),
    'lbl_panel2' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'sales_ppt_c',
          'label' => 'LBL_SALES_PPT',
        ),
        1 => 
        array (
          'name' => 'logos_needed_c',
          'label' => 'LBL_LOGOS_NEEDED',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'media_kit_c',
          'label' => 'LBL_MEDIA_KIT',
        ),
        1 => 
        array (
          'name' => 'research_c',
          'label' => 'LBL_RESEARCH',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'existing_case_study_c',
          'label' => 'LBL_EXISTING_CASE_STUDY',
        ),
        1 => 
        array (
          'name' => 'additional_research_infomation_c',
          'label' => 'LBL_ADDITIONAL_RESEARCH_INFOMATION',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'sales_videos_c',
          'label' => 'LBL_SALES_VIDEOS',
        ),
        1 => 
        array (
          'name' => 'mapping_c',
          'label' => 'LBL_MAPPING',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'advertiser_achieve_c',
          'label' => 'LBL_ADVERTISER_ACHIEVE',
        ),
        1 => 'next_step',
      ),
    ),
  ),
);