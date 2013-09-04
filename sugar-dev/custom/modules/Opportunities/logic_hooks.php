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
$hook_array['after_save'] = Array(); $hook_array['after_save'][] = Array(1, 'add_code', 'custom/modules/Opportunities/add_code_hook.php','add_code', 'add_code');


?>