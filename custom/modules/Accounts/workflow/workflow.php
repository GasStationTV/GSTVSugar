<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Accounts_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Accounts/workflow/triggers_array.php");
		include("custom/modules/Accounts/workflow/alerts_array.php");
		include("custom/modules/Accounts/workflow/actions_array.php");
		include("custom/modules/Accounts/workflow/plugins_array.php");
		
 if(true){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['8fefb62c_362a_ed63_607c_5254a9afdae0'])){
		$triggeredWorkflows['8fefb62c_362a_ed63_607c_5254a9afdae0'] = true;
		 process_workflow_actions($focus, $action_meta_array['Accounts0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Accounts'] = isset($_SESSION['WORKFLOW_ALERTS']['Accounts']) && is_array($_SESSION['WORKFLOW_ALERTS']['Accounts']) ? $_SESSION['WORKFLOW_ALERTS']['Accounts'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Accounts'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Accounts'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>