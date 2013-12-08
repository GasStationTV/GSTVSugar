<?php
$module_name = 'props_Proposals';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mapping_only_c',
            'label' => 'LBL_MAPPING_ONLY',
          ),
          1 => 
          array (
            'name' => 'pricing_only_c',
            'label' => 'LBL_PRICING_ONLY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tracking_number_c',
            'label' => 'LBL_TRACKING_NUMBER_C',
            'type' => 'readonly',
          ),
          1 => 
          array (
            'name' => 'opportunity_no_c',
            'label' => 'LBL_OPPORTUNITY_NO',
            'type' => 'readonly',
          ),
        ),
        2 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'opportunity_name_c',
            'label' => 'LBL_OPPORTUNITY_NAME',
            'type' => 'readonly',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'proposal_status_c',
            'studio' => 'visible',
            'label' => 'LBL_PROPOSAL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'proposalneededby',
            'label' => 'LBL_PROPOSALNEEDEDBY',
          ),
          1 => 
          array (
            'name' => 'proposalamount',
            'label' => 'LBL_PROPOSALAMOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'flightstartdate',
            'label' => 'LBL_FLIGHTSTARTDATE',
          ),
          1 => 
          array (
            'name' => 'flightenddate',
            'label' => 'LBL_FLIGHTENDDATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'spotlength1',
            'studio' => 'visible',
            'label' => 'LBL_SPOTLENGTH1',
          ),
          1 => 
          array (
            'name' => 'spotlength2',
            'studio' => 'visible',
            'label' => 'LBL_SPOTLENGTH2',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'cpm_c',
            'label' => 'LBL_CPM',
          ),
          1 => 
          array (
            'name' => 'cpm2_c',
            'label' => 'LBL_CPM2',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'dayparting',
            'studio' => 'visible',
            'label' => 'LBL_DAYPARTING',
          ),
          1 => 
          array (
            'name' => 'sovfrequency',
            'studio' => 'visible',
            'label' => 'LBL_SOVFREQUENCY',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'component_items',
            'studio' => 'visible',
            'label' => 'LBL_COMPONENT_ITEMS',
          ),
          1 => 
          array (
            'name' => 'targetdemo',
            'label' => 'LBL_TARGETDEMO',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'additional_program_details',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_PROGRAM_DETAILS',
          ),
          1 => 
          array (
            'name' => 'add_value_bonus',
            'studio' => 'visible',
            'label' => 'LBL_ADD_VALUE_BONUS',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'plannerstatus_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNERSTATUS',
          ),
          1 => 
          array (
            'name' => 'completeddate_c',
            'label' => 'LBL_COMPLETEDDATE',
            'type' => 'readonly',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'salesstage_c',
            'studio' => 'visible',
            'label' => 'LBL_SALESSTAGE',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'planner1_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER1',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'planner2_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER2',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'planner3_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER3',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'gstv_dmas',
            'studio' => 'visible',
            'label' => 'LBL_GSTV_DMAS',
          ),
          1 => 
          array (
            'name' => 'add_dma_details',
            'studio' => 'visible',
            'label' => 'LBL_ADD_DMA_DETAILS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'client_prov_loc',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_PROV_LOC',
          ),
          1 => 
          array (
            'name' => 'need_cli_loc_list',
            'studio' => 'visible',
            'label' => 'LBL_NEED_CLI_LOC_LIST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mile_rad_1',
            'label' => 'LBL_MILE_RAD_1',
          ),
          1 => 
          array (
            'name' => 'mile_rad_2',
            'label' => 'LBL_MILE_RAD_2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'excel_sheet',
            'studio' => 'visible',
            'label' => 'LBL_EXCEL_SHEET',
          ),
          1 => 
          array (
            'name' => 'visual_maps',
            'studio' => 'visible',
            'label' => 'LBL_VISUAL_MAPS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'gstv_vs_client',
            'studio' => 'visible',
            'label' => 'LBL_GSTV_VS_CLIENT',
          ),
          1 => 
          array (
            'name' => 'client_vs_gstv',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_VS_GSTV',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'mapping_locations_c',
            'label' => 'LBL_MAPPING_LOCATIONS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'add_map_details',
            'studio' => 'visible',
            'label' => 'LBL_ADD_MAP_DETAILS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sales_ppt',
            'label' => 'LBL_SALES_PPT',
          ),
          1 => 
          array (
            'name' => 'logos_needed',
            'label' => 'LBL_LOGOS_NEEDED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'media_kit',
            'label' => 'LBL_MEDIA_KIT',
          ),
          1 => 
          array (
            'name' => 'research',
            'studio' => 'visible',
            'label' => 'LBL_RESEARCH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'existing_case_study',
            'studio' => 'visible',
            'label' => 'LBL_EXISTING_CASE_STUDY',
          ),
          1 => 
          array (
            'name' => 'additional_research_infomation',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_RESEARCH_INFOMATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'subcategory',
            'studio' => 'visible',
            'label' => 'LBL_SUBCATEGORY',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sales_videos_needed',
            'studio' => 'visible',
            'label' => 'LBL_SALES_VIDEOS_NEEDED',
          ),
          1 => 
          array (
            'name' => 'advertiser_achieve',
            'studio' => 'visible',
            'label' => 'LBL_ADVERTISER_ACHIEVE',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'label' => 'LBL_TEAMS',
          ),
        ),
      ),
    ),
  ),
);
?>
