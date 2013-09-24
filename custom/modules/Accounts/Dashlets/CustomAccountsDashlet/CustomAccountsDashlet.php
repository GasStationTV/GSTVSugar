<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGeneric.php');
require_once('custom/modules/Accounts/CustomAccount.php');

class CustomAccountsDashlet extends DashletGeneric { 
    function CustomAccountsDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('custom/modules/Accounts/Dashlets/CustomAccountsDashlet/CustomAccountsDashlet.data.php');

        parent::DashletGeneric($id, $def);

        // if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Accounts');
        if(empty($def['title'])) $this->title = 'Custom Accounts';

        $this->searchFields = $dashletData['CustomAccountsDashlet']['searchFields'];
        $this->columns = $dashletData['CustomAccountsDashlet']['columns'];

        $this->seedBean = new CustomAccount();        
    }
    
    /**
     * Overrides the generic process to include custom logic for email addresses,
     * since they are no longer stored in  a list view friendly manner.
     * (A record may have an undetermined number of email addresses).
     *
     * @param array $lvsParams
     */
     
	function process($lvsParams = array()) {
    	if (isset($this->displayColumns) && array_search('email1', $this->displayColumns) !== false) {
	    	$lvsParams['custom_select'] = ', email_address as email1';
	    	$lvsParams['custom_from'] = ' LEFT JOIN email_addr_bean_rel eabr ON eabr.deleted = 0 AND bean_module = \'Accounts\''
	    							  . ' AND eabr.bean_id = accounts.id AND primary_address = 1'
	    							  . ' LEFT JOIN email_addresses ea ON ea.deleted = 0 AND ea.id = eabr.email_address_id';
    	}
    	
        if (isset($this->displayColumns) && array_search('parent_name', $this->displayColumns) !== false) {
	    	$lvsParams['custom_select'] = empty($lvsParams['custom_select']) ? ', a1.name as parent_name ' : $lvsParams['custom_select'] . ', a1.name as parent_name ';
	    	$lvsParams['custom_from'] = empty($lvsParams['custom_from']) ? ' LEFT JOIN accounts a1 on a1.id = accounts.parent_id' : $lvsParams['custom_from'] . ' LEFT JOIN accounts a1 on a1.id = accounts.parent_id';
    	}    	

    	parent::process($lvsParams);
    }
}

?>
