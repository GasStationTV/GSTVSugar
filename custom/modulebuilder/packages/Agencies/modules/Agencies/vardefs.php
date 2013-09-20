<?php
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

$vardefs = array (
  'fields' => 
  array (
    'agency_type' => 
    array (
      'required' => false,
      'name' => 'agency_type',
      'vname' => 'LBL_AGENCY_TYPE',
      'type' => 'multienum',
      'massupdate' => 0,
      'default' => '^^',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 1,
      'len' => 100,
      'options' => 'GSTV_Agency_Type_list',
      'studio' => 'visible',
      'isMultiSelect' => true,
    ),
  ),
  'relationships' => 
  array (
  ),
);