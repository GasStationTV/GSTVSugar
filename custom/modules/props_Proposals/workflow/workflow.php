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
	if (!isset($triggeredWorkflows['f290d996_80a6_d234_3215_5256cfe29043'])){
		$triggeredWorkflows['f290d996_80a6_d234_3215_5256cfe29043'] = true;
		 process_workflow_actions($focus, $action_meta_array['props_Proposals0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['props_Proposals'] = isset($_SESSION['WORKFLOW_ALERTS']['props_Proposals']) && is_array($_SESSION['WORKFLOW_ALERTS']['props_Proposals']) ? $_SESSION['WORKFLOW_ALERTS']['props_Proposals'] : array();
		$_SESSION['WORKFLOW_ALERTS']['props_Proposals'] = array_merge($_SESSION['WORKFLOW_ALERTS']['props_Proposals'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>