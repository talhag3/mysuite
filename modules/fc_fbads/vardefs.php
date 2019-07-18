<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['fc_fbads'] = array(
    'table' => 'fc_fbads',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
  'fb_ad_id' => 
  array (
    'required' => false,
    'name' => 'fb_ad_id',
    'vname' => 'LBL_FB_AD_ID',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  // Relate 
  'fbcampaign_name'=> array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'fbcampaign_name',
    'vname'     => 'LBL_FBCAMPAIGN_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'fbcampaign_id',
    'link'      => 'fbcampaign_ads',
    'module'    => 'fc_fbcampaigns',  
  ),
  //id
  'fbcampaign_id' => array(
    'name'              => 'fbcampaign_id',
    'rname'             => 'id',
    'vname'             => 'LBL_FBCAMPAIGN_ID',
    'type'              => 'id',
    'table'             => 'fc_fbcampaigns',
    'isnull'            => 'true',
    'module'            => 'fc_fbcampaigns',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
  ),
  //link
    'fbcampaign_ads'=> array(
        'name'          => 'fbcampaign_ads',
        'type'          => 'link',
        'relationship'  => 'fbcampaign_ads',
        'module'        => 'fc_fbcampaigns',
        'bean_name'     => 'fc_fbcampaigns',
        'source'        => 'non-db',
        'vname'         => 'LBL_FBCAMPAIGN_ADS_LINK',
    ),
    //Link Leads
    'fb_ad_leads'=>array(
      'name'          => 'fb_ad_leads',
      'type'          => 'link',
      'relationship'  => 'fb_ad_leads',
      'module'        => 'Leads',
      'bean_name'     => 'Lead',
      'source'        => 'non-db',
      'vname'         => 'LBL_FB_AD_LEADS_LINK',
    ),
    'ad_budget' => 
    array (
      'inline_edit' => '1',
      'required' => false,
      'name' => 'ad_budget',
      'vname' => 'LBL_AD_BUDGET',
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      
    ),
    'ad_budget_id' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'name' => 'ad_budget_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      
    ),
 ),
    'relationships' => array (
        //Relationship
        "fbcampaign_ads"=> array(
            'lhs_module'		=> 'fc_fbcampaigns',
            'lhs_table'			=> 'fc_fbcampaigns',
            'lhs_key'			=> 'id',
            'rhs_module'		=> 'fc_fbads',
            'rhs_table'			=> 'fc_fbads',
            'rhs_key'			=> 'fbcampaign_id',
            'relationship_type'	=> 'one-to-many',
        )
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('fc_fbads', 'fc_fbads', array('basic','assignable','security_groups'));