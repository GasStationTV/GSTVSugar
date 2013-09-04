<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Opportunities_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Opportunities/workflow/triggers_array.php");
		include("custom/modules/Opportunities/workflow/alerts_array.php");
		include("custom/modules/Opportunities/workflow/actions_array.php");
		include("custom/modules/Opportunities/workflow/plugins_array.php");
		if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( ( !($focus->fetched_row['opportunity_stage_c'] ==  'Closed_Won' )) && 
 (isset($focus->opportunity_stage_c) && $focus->opportunity_stage_c ==  'Closed_Won')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['edcee655_d6d0_c569_2408_5208f69e4f02'])){
		$triggeredWorkflows['edcee655_d6d0_c569_2408_5208f69e4f02'] = true;
		 process_workflow_actions($focus, $action_meta_array['Opportunities0_action0']); 
 	 process_workflow_actions($focus, $action_meta_array['Opportunities0_action1']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && is_array($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( ( !($focus->fetched_row['opportunity_stage_c'] ==  'Closed_Won' )) && 
 (isset($focus->opportunity_stage_c) && $focus->opportunity_stage_c ==  'Closed_Won')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->closedamount_c) && $focus->closedamount_c >  '300000.00')	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['eec8f04e_aef6_43e9_5390_5208f63da847'])){
		$triggeredWorkflows['eec8f04e_aef6_43e9_5390_5208f63da847'] = true;
		 unset($alertshell_array); 
		 process_workflow_actions($focus, $action_meta_array['Opportunities1_action0']); 
 	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 


	//end function process_wflow_triggers
	}

	//end class
	}

?>