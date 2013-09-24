<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
global $app_strings;

$dashletMeta['CustomPreOpportunityDashlet'] = array('module'		=> 'gpop_PreOpportunity',
										  // 'title'       => translate('LBL_HOMEPAGE_TITLE', 'gpop_PreOpportunity'), 
										  'title'       => 'Custom Pre-Opportunity',
                                          'description' => 'A customizable view into gpop_PreOpportunity',
                                          'icon'        => 'icon_gpop_PreOpportunity_32.gif',
                                          'category'    => 'Module Views');