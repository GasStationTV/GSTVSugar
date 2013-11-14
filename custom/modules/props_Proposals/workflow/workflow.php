<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class props_Proposals_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/props_Proposals/workflow/triggers_array.php");
		include("custom/modules/props_Proposals/workflow/alerts_array.php");
		include("custom/modules/props_Proposals/workflow/actions_array.php");
		include("custom/modules/props_Proposals/workflow/plugins_array.php");
		
 if(true){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['cb62b343_42b1_d13e_d1be_52845acb739f'])){
		$triggeredWorkflows['cb62b343_42b1_d13e_d1be_52845acb739f'] = true;
		 process_workflow_actions($focus, $action_meta_array['props_Proposals0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['props_Proposals'] = isset($_SESSION['WORKFLOW_ALERTS']['props_Proposals']) && is_array($_SESSION['WORKFLOW_ALERTS']['props_Proposals']) ? $_SESSION['WORKFLOW_ALERTS']['props_Proposals'] : array();
		$_SESSION['WORKFLOW_ALERTS']['props_Proposals'] = array_merge($_SESSION['WORKFLOW_ALERTS']['props_Proposals'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( ( isset($focus->proposalamount) && ( empty($focus->fetched_row) || array_key_exists('proposalamount', $focus->fetched_row) ) && $focus->fetched_row['proposalamount'] != $focus->proposalamount) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['cd56b2b0_7651_d1ab_c75e_52845a1e96c6'])){
		$triggeredWorkflows['cd56b2b0_7651_d1ab_c75e_52845a1e96c6'] = true;
		 unset($alertshell_array); 
		}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( ( (empty($focus->fetched_row['flightstartdate']) && !empty($focus->flightstartdate) ) || ( isset($focus->flightstartdate) && isset($focus->fetched_row['flightstartdate']) && $GLOBALS['timedate']->to_display_date_time($focus->fetched_row['flightstartdate']) != $GLOBALS['timedate']->to_display_date_time($focus->flightstartdate))) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['cd56b1bc_1913_9de6_2315_52845ad2ace5'])){
		$triggeredWorkflows['cd56b1bc_1913_9de6_2315_52845ad2ace5'] = true;
		 unset($alertshell_array); 
		 process_workflow_actions($focus, $action_meta_array['props_Proposals2_action0']); 
 	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( ( isset($focus->proposalamount) && ( empty($focus->fetched_row) || array_key_exists('proposalamount', $focus->fetched_row) ) && $focus->fetched_row['proposalamount'] != $focus->proposalamount) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['ce50be8d_5d7b_907f_ce2d_52845a3279f6'])){
		$triggeredWorkflows['ce50be8d_5d7b_907f_ce2d_52845a3279f6'] = true;
		 unset($alertshell_array); 
		}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( ( (empty($focus->fetched_row['flightenddate']) && !empty($focus->flightenddate) ) || ( isset($focus->flightenddate) && isset($focus->fetched_row['flightenddate']) && $GLOBALS['timedate']->to_display_date_time($focus->fetched_row['flightenddate']) != $GLOBALS['timedate']->to_display_date_time($focus->flightenddate))) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['ce50b8a4_0b21_91a1_5edd_52845a1ae996'])){
		$triggeredWorkflows['ce50b8a4_0b21_91a1_5edd_52845a1ae996'] = true;
		 unset($alertshell_array); 
		 process_workflow_actions($focus, $action_meta_array['props_Proposals4_action0']); 
 	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( ( isset($focus->salesstage_c) && ( empty($focus->fetched_row) || array_key_exists('salesstage_c', $focus->fetched_row) ) && $focus->fetched_row['salesstage_c'] != $focus->salesstage_c) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['cf4aba3c_8f52_ad75_15b3_52845a9dbc5e'])){
		$triggeredWorkflows['cf4aba3c_8f52_ad75_15b3_52845a9dbc5e'] = true;
		 unset($alertshell_array); 
		}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>