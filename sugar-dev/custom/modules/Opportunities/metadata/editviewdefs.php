<?php
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'tabDefs' => 
      array (
        'LBL_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
          1 => 
          array (
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'restrictions_c',
            'label' => 'LBL_RESTRICTIONS',
          ),
        ),
      ),
      'lbl_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tracking_number_c',
            'label' => 'LBL_TRACKING_NUMBER_C',
	     'type' => "readonly",
          ),
          1 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_OPPORTUNITY_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_manager_name_c',
            'label' => 'LBL_ACCOUNT_MANAGER_NAME',
          ),
          1 => 
          array (
            'name' => 'primary_ae_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_AE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'planner3_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER3',
          ),
          1 => 
          array (
            'name' => 'client_ae_c',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_AE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'planner2_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER2',
          ),
          1 => 
          array (
            'name' => 'account_exec_1_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_EXEC_1',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'planner4_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER4',
          ),
          1 => 
          array (
            'name' => 'account_exec_2_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_EXEC_2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_stage_c',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY_STAGE',
          ),
          1 => 
          array (
            'name' => 'opp_origin_c',
            'studio' => 'visible',
            'label' => 'LBL_OPP_ORIGIN',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'division_c',
            'label' => 'LBL_DIVISION',
          ),
          1 => 
          array (
            'name' => 'lead_source',
            'label' => 'LBL_LEAD_SOURCE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'proj_amount_c',
            'label' => 'LBL_PROJ_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'probability_dropdown_c',
            'label' => 'LBL_PROBABILITY_DROPDOWN',
          ),
        ),
        8 => 
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'drivingagency1_c',
            'studio' => 'visible',
            'label' => 'LBL_DRIVINGAGENCY1',
			'displayParams' => array(
				'initial_filter' => '&advertiserId=eaea0d5a-7027-851d-78c4-5214f62a7773',
			),
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
            'name' => 'drivingagency2_c',
            'studio' => 'visible',
            'label' => 'LBL_DRIVINGAGENCY2',
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
            'name' => 'drivingagency3_c',
            'studio' => 'visible',
            'label' => 'LBL_DRIVINGAGENCY3',
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
    ),
  ),
);
?>
