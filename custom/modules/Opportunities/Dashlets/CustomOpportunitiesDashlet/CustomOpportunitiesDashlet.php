<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGeneric.php');
require_once('custom/modules/Opportunities/CustomOpportunity.php');

class CustomOpportunitiesDashlet extends DashletGeneric { 
    function CustomOpportunitiesDashlet($id, $def = null) {
        global $current_user, $app_strings, $dashletData;
		require('custom/modules/Opportunities/Dashlets/CustomOpportunitiesDashlet/CustomOpportunitiesDashlet.data.php');
        
        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = 'Custom Opportunities'; #translate('LBL_TOP_OPPORTUNITIES', 'Opportunities');
         
        $this->searchFields = $dashletData['CustomOpportunitiesDashlet']['searchFields'];
        $this->columns = $dashletData['CustomOpportunitiesDashlet']['columns'];
        
        $this->seedBean = new CustomOpportunity();        
    }
    
    //4.5.0g fix for upgrade issue where user_preferences table still refer to column as 'amount'
    function process($lvsParams = array()) {
     	if(!empty($this->displayColumns)) {
     	if(array_search('amount', $this->displayColumns)) {
     		$this->displayColumns[array_search('amount', $this->displayColumns)] = 'amount_usdollar';
     	}
     	}
     	parent::process($lvsParams);
    }    
    
}

?>
