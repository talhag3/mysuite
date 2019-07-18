<?php 
 //WARNING: The contents of this file are auto-generated



$hook_array['after_ui_footer'][] = Array(
    //Processing index. For sorting the array.
    1, 
    
    //Label. A string value to identify the hook.
    'after_ui_frame example', 
    
    //The PHP file where your class is located.
    'custom/include/AnnotatedChart/google_chart_hook.php', 
    
    //The class the method is in.
    'logic_hooks_class', 
    
    //The method to call.
    'after_ui_frame_method' 
);



$hook_array['after_entry_point'][] = Array(
    //Processing index. For sorting the array.
    1, 
    
    //Label. A string value to identify the hook.
    'after_entry_point example', 
    
    //The PHP file where your class is located.
    'custom/include/AnnotatedChart/google_chart_hook.php', 
    
    //The class the method is in.
    'logic_hooks_class', 
    
    //The method to call.
    'after_entry_point_method' 
);


/**
 * Advanced OpenWorkflow, Automating SugarCRM.
 * @package Advanced OpenWorkflow for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_save']) || !is_array($hook_array['after_save'])) {
    $hook_array['after_save'] = array();
}
$hook_array['after_save'][] = Array(99, 'AOW_Workflow', 'modules/AOW_WorkFlow/AOW_WorkFlow.php','AOW_WorkFlow', 'run_bean_flows');
?>