<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGeneric.php');
require_once('custom/modules/props_Proposals/CustomProposal.php');

class CustomProposalsDashlet extends DashletGeneric { 
    function CustomProposalsDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/props_Proposals/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        // if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'props_Proposals');
        if(empty($def['title'])) $this->title = 'Custom Proposals';

        $this->searchFields = $dashletData['props_ProposalsDashlet']['searchFields'];
        $this->columns = $dashletData['props_ProposalsDashlet']['columns'];

        $this->seedBean = new CustomProposal();        
    }
}