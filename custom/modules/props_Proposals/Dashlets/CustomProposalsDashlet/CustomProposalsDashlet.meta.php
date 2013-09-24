<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
global $app_strings;

$dashletMeta['CustomProposalsDashlet'] = array('module'		=> 'props_Proposals',
										  // 'title'       => translate('LBL_HOMEPAGE_TITLE', 'props_Proposals'), 
										  'title'       => 'Custom Proposals',
                                          'description' => 'A customizable view into props_Proposals',
                                          'icon'        => 'icon_props_Proposals_32.gif',
                                          'category'    => 'Module Views');