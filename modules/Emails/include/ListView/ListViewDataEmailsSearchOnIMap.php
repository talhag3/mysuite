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
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
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
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class ListViewDataEmailsSearchOnIMap extends ListViewDataEmailsSearchAbstract {



    /**
     * @param Email $seed
     * @param array $request
     * @param string $where
     * @param string $id
     * @param InboundEmail $inboundEmail
     * @param array $filter
     * @param Folder $folderObj
     * @param User $currentUser
     * @param string $folder
     * @param int $limit
     * @param string $limitPerPage
     * @return array
     */
    public function search($seed, &$request, $where, $id, $inboundEmail, $filter, $folderObj, $currentUser, $folder, $limit, $limitPerPage) {


        // Create the data structure which are required to view a list view.
        require_once 'include/SearchForm/SearchForm2.php';
        
        $this->lvde->seed =& $seed;
        $this->lvde->setVariableName($seed->object_name, $where, $this->lvde->listviewName, $id);
        $this->lvde->seed->id = '[SELECT_ID_LIST]';

        if (!empty($params['overrideOrder']) && !empty($params['orderBy'])) {
            $order = $this->lvde->getOrderBy(
                strtolower($params['orderBy']),
                (empty($params['sortOrder']) ? '' : $params['sortOrder'])
            );
        } else {
            $order = $this->lvde->getOrderBy();
        }

        // still empty? try to use settings passed in $param
        if (empty($order['orderBy']) && !empty($params['orderBy'])) {
            $order['orderBy'] = $params['orderBy'];
            $order['sortOrder'] = (empty($params['sortOrder']) ? '' : $params['sortOrder']);
        }

        // TODO: figure out why was it for?
        $orderby = $order['orderBy'];
        if (strpos($order['orderBy'], '.') && ($order['orderBy'] != "report_cache.date_modified")) {
            $orderby = substr($order['orderBy'], strpos($order['orderBy'], '.') + 1);
        }


        $page = 0;
        $offset = 0;
        if (isset($request['Emails2_EMAIL_offset'])) {
            if ($request['Emails2_EMAIL_offset'] !== "end") {
                $offset = $request['Emails2_EMAIL_offset'];
                $page = $offset / $limitPerPage;
            }
        }

        // Get emails from email server
        $emailServerEmails = $inboundEmail->checkWithPagination($offset, $limitPerPage, $order, $filter);

        $total = $emailServerEmails['mailbox_info']['Nmsgs']; // + count($importedEmails['data']);
        if ($page === "end") {
            $offset = $total - $limitPerPage;
        }


        /// Populate the data and its fields from the email server
        $request['uids'] = array();

        foreach ($emailServerEmails['data'] as $h => $emailHeader) {


            $emailRecord = $this->lvde->getEmailRecord($folderObj, $emailHeader, $seed, $inboundEmail, $currentUser, $folder);
            if($emailRecord === false) {
                continue;
            }

            $data[] = $emailRecord;
            $pageData['rowAccess'][$h] = array('edit' => true, 'view' => true);
            $pageData['additionalDetails'][$h] = '';
            $pageData['tag'][$h]['MAIN'] = 'a';
        }


        // Filter imported emails based on the UID of the results from the IMap server
        $crmWhere = $where . " AND mailbox_id LIKE " . "'" . $inboundEmail->id . "'";

        $ret_array['inner_join'] = '';
        if (!empty($this->lvde->seed->listview_inner_join)) {
            $ret_array['inner_join'] = ' ' . implode(' ', $this->lvde->seed->listview_inner_join) . ' ';
        }

        if (!is_array($params)) {
            $params = array();
        }
        if (!isset($params['custom_select'])) {
            $params['custom_select'] = '';
        }
        if (!isset($params['custom_from'])) {
            $params['custom_from'] = '';
        }
        if (!isset($params['custom_where'])) {
            $params['custom_where'] = '';
        }
        if (!isset($params['custom_order_by'])) {
            $params['custom_order_by'] = '';
        }

        $this->lvde->setVariableName($seed->object_name, $crmWhere, $this->lvde->listviewName, $id);

        $this->lvde->seed->id = '[SELECT_ID_LIST]';

        $nextOffset = -1;
        $prevOffset = -1;
        $endOffset = 0;


        if ($total > $limitPerPage) {
            $nextOffset = $offset + $limitPerPage;
        }

        if ($nextOffset >= $total) {
            $nextOffset = $total;
        }

        if ($page > 0) {
            $prevOffset = $offset - $limitPerPage;
            if ($prevOffset < 0) {
                $prevOffset = 0;
            }
        }

        if ($total < $limitPerPage) {
            $prevOffset = -1;
            $nextOffset = -1;
        }

        if ($total > 0) {
            $endOffset = $total / $limitPerPage;
        }

        $pageData['offsets']['current'] = $offset;
        $pageData['offsets']['total'] = $total;
        $pageData['offsets']['next'] = $nextOffset;
        $pageData['offsets']['prev'] = $prevOffset;
        $pageData['offsets']['end'] = ceil($endOffset);

        $queries = array('baseUrl', 'endPage', 'nextPage', 'orderBy');

        if ((int)$pageData['offsets']['current'] >= $limitPerPage) {
            $queries[] = 'prevPage';
            $queries[] = 'startPage';
        }

        foreach ($queries as $query) {

            if ($total < $limitPerPage || $nextOffset >= $total) {
                if (isset($pageData['queries'][$query])) {
                    unset($pageData['queries'][$query]);
                }
            } else {
                $pageData['queries'][$query]['module'] = "Emails";
                $pageData['queries'][$query]['action'] = "index";
                $pageData['queries'][$query]['parentTab'] = "Activities";
                $pageData['queries'][$query]['ajax_load'] = "0";
                $pageData['queries'][$query]['loadLanguageJS'] = "1";
                $pageData['queries'][$query]['searchFormTab'] = "advanced_search";
                $pageData['queries'][$query]['lvso'] = "DESC";

                $pageData['urls'][$query] = 'index.php?module=Emails&action=index&parentTab=Activities&searchFormTab=advanced_search&query=true&current_user_only_basic=0&button=Search&lvso=DESC';

            }
        }

        // TODO: UNDEFINED: refactor current_query_by_page in the list view
        // inject post values
        $request['folder'] = $folder;
        $request['folder_type'] = $folderObj->getType();
        $request['inbound_email_record'] = $inboundEmail->id;

        if (empty($folder)) {
            if (!empty($inboundEmail->mailbox)) {
                $request['folder'] = $inboundEmail->mailbox;
            } elseif (!empty($inboundEmail->mailboxarray)
                && is_array($inboundEmail->mailboxarray)
                && count($inboundEmail->mailboxarray)) {
                $request['folder'] = $inboundEmail->mailboxarray[0];
            }
        }

        // TODO: TASK: UNDEFINED - HANDLE in second filter after IMap
        $endOffset = floor(($total - 1) / $limit) * $limit;
        $pageData['queries'] = $this->lvde->callGenerateQueries(
            $pageData['ordering']['sortOrder'],
            $offset,
            $prevOffset,
            $nextOffset,
            $endOffset,
            $total
        );
        $pageData['offsets'] = array(
            'current' => $offset,
            'next' => $nextOffset,
            'prev' => $prevOffset,
            'end' => $endOffset,
            'total' => $total,
            'totalCounted' => $total
        );

        $pageData['ordering'] = $order;
        $pageData['ordering']['sortOrder'] = $this->lvde->getReverseSortOrder($pageData['ordering']['sortOrder']);
        //get url parameters as an array
        //join url parameters from array to a string
        $pageData['urls'] = $this->lvde->callGenerateURLS($pageData['queries']);
        $module_names = array(
            'Prospects' => 'Targets'
        );
        $pageData['bean'] = array(
            'objectName' => $seed->object_name,
            'moduleDir' => $seed->module_dir,
            'moduleName' => strtr($seed->module_dir, $module_names)
        );
        $pageData['stamp'] = $this->lvde->stamp;
        $pageData['access'] = array(
            'view' => $this->lvde->seed->ACLAccess('DetailView'),
            'edit' => $this->lvde->seed->ACLAccess('EditView')
        );
        if (!$this->lvde->seed->ACLAccess('ListView')) {
            $pageData['error'] = 'ACL restricted access';
        }


        if ( $this->lvde->isRequestedSearchAdvanced($request) ) {
            $queryString = "-advanced_search";
        } else {
            if ( $this->lvde->isRequestedSearchBasic($request) ) {

                // SearchForm is a (SearchForm2)
                $searchMetaData = SearchForm::retrieveSearchDefs($seed->module_dir);

                $basicSearchFields = array();

                if (
                    isset($searchMetaData['searchdefs']) &&
                    isset($searchMetaData['searchdefs'][$seed->module_dir]['layout']['basic_search'])
                ) {
                    $basicSearchFields = $searchMetaData['searchdefs'][$seed->module_dir]['layout']['basic_search'];
                }

                foreach ($basicSearchFields as $basicSearchField) {
                    $field_name = (is_array($basicSearchField) && isset($basicSearchField['name']))
                        ? $basicSearchField['name'] : $basicSearchField;
                    $field_name .= "_basic";
                    if (
                        isset($request[$field_name]) &&
                        (
                            !is_array($basicSearchField) ||
                            !isset($basicSearchField['type']) ||
                            $basicSearchField['type'] == 'text' ||
                            $basicSearchField['type'] == 'name'
                        )
                    ) {
                        // Ensure the encoding is UTF-8
                        $queryString = htmlentities($request[$field_name], null, 'UTF-8');
                        break;
                    }
                }
            } else {
                $GLOBALS['log']->warn("Unknown requested search type");
            }
        }

        $request['email_uids'] = $this->lvde->getEmailUIds($data);


        $ret = array('data' => $data, 'pageData' => $pageData, 'query' => $queryString);

        return $ret;
    }

}