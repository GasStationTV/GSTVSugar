<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGeneric.php');
require_once('custom/modules/gpop_PreOpportunity/Customgpop_PreOpportunity.php');

class CustomPreOpportunityDashlet extends DashletGeneric { 
    function CustomPreOpportunityDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/gpop_PreOpportunity/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        // if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'gpop_PreOpportunity');
        if(empty($def['title'])) $this->title = 'Custom Pre-Opportunity';

        $this->searchFields = $dashletData['gpop_PreOpportunityDashlet']['searchFields'];
        $this->columns = $dashletData['gpop_PreOpportunityDashlet']['columns'];

        $this->seedBean = new Customgpop_PreOpportunity();        
    }
}