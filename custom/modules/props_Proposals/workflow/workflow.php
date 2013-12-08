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
	if (!isset($triggeredWorkflows['aada262d_ff68_bb0d_9b2c_529df1128f7e'])){
		$triggeredWorkflows['aada262d_ff68_bb0d_9b2c_529df1128f7e'] = true;
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
	if (!isset($triggeredWorkflows['aada230b_6a95_4b9d_b2f3_529df1f3837f'])){
		$triggeredWorkflows['aada230b_6a95_4b9d_b2f3_529df1f3837f'] = true;
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
	if (!isset($triggeredWorkflows['abd42150_c79d_8663_fe9d_529df1640b7f'])){
		$triggeredWorkflows['abd42150_c79d_8663_fe9d_529df1640b7f'] = true;
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
	if (!isset($triggeredWorkflows['abd429a5_8e55_19c0_2b3f_529df1a9dcf0'])){
		$triggeredWorkflows['abd429a5_8e55_19c0_2b3f_529df1a9dcf0'] = true;
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
	if (!isset($triggeredWorkflows['acce2ea3_5873_1978_8713_529df1d1b7be'])){
		$triggeredWorkflows['acce2ea3_5873_1978_8713_529df1d1b7be'] = true;
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
	if (!isset($triggeredWorkflows['acce2490_ba4e_2111_bdef_529df1940329'])){
		$triggeredWorkflows['acce2490_ba4e_2111_bdef_529df1940329'] = true;
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