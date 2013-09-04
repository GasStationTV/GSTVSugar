<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class LeadsViewList extends ViewList
{
 	public function preDisplay()
 	{
		global $current_user; 
 		if(is_admin($current_user)) {
 		}
		else {
			if(!array_key_exists("query", $_REQUEST) && !array_key_exists("clear_query", $_REQUEST)){
       	     		if(!array_key_exists("open_only_basic", $_REQUEST)){
              	     		$_REQUEST['open_only_basic']="1";
				}
        		}
        		else{
                		$_REQUEST['open_only_basic'] = "1";
			}
        	}

 		parent::preDisplay();
 		$this->lv->targetList = true;
 	}

   	public function listViewProcess()
    {
 		global $current_user; 
 		if(is_admin($current_user)) {
 		}
		else {
		   	if(!array_key_exists("query", $_REQUEST) && !array_key_exists("clear_query", $_REQUEST)){
           			$_REQUEST['searchFormTab']="basic_search";
            			$_REQUEST['query']="true";
            			$_REQUEST['open_only_basic']="1";
        		}

        		if(array_key_exists("query", $_REQUEST) && !array_key_exists("clear_query", $_REQUEST)) {
            			if(!array_key_exists("open_only_basic", $_REQUEST)){
                			$_REQUEST['query']="true";
                			$_REQUEST['open_only_basic']="1";
            			}
            			else{
                			$_REQUEST['open_only_basic'] = "1";
            			}
        		}
		}
        parent::listViewProcess();
    }

}
