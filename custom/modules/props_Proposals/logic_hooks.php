<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'workflow', 'include/workflow/WorkFlowHandler.php','WorkFlowHandler', 'WorkFlowHandler'); 
$hook_array['after_ui_frame'] = Array(); 

// tony lim - adding auto increment hook
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(
	1, // execution order 
	'Auto increment hook', // hook name
	'custom/modules/props_Proposals/add_proposalscode_hook.php', // file location
	'add_proposalscode_hook',  // class name
	'add_proposalscode_hook'   // method name
);


?>