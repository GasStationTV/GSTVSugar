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

class ContactsViewList extends ViewList
{
 	public function preDisplay()
 	{
  		if(!array_key_exists("query", $_REQUEST) && !array_key_exists("clear_query", $_REQUEST)){ 
             		$_REQUEST['emp_catagory_c_basic']="Advertiser"; 
        	} 

		parent::preDisplay();
 		$this->lv->targetList = true;
 	}
    function listViewProcess() 
    {  
         if(!array_key_exists("query", $_REQUEST) && !array_key_exists("clear_query", $_REQUEST)){ 
            $_REQUEST['searchFormTab']="basic_search"; 
            $_REQUEST['query']="true"; 
            $_REQUEST['emp_catagory_c_basic']=$today_date; 
        } 
         
        if(array_key_exists("query", $_REQUEST) && !array_key_exists("clear_query", $_REQUEST)) 
        { 
            if(!array_key_exists("emp_catagory_c_basic", $_REQUEST)){ 
                $_REQUEST['query']="true"; 
                $_REQUEST['emp_catagory_c_basic']=$today_date; 
            } 
        } 
          parent::listViewProcess();  
    }  


}
