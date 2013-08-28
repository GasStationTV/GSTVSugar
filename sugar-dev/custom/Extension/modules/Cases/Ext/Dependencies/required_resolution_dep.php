<?php
$dependencies['Cases']['required_resolution'] = array(
	'hooks' => array("edit"),
	'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
	'triggerFields' => array('status'),
	'onload' => true,
	//Actions is a list of actions to fire when the trigger is true
	'actions' => array(
		array(
			'name' => 'ReadOnly',
			//The parameters passed in will depend on the action type set in 'name'
			'params' => array(
				'target' => 'resolution',
				'label'  => 'resolution_label',
				'value' => 'equal($status, "Closed")',
			),
		),
	),
);
?>