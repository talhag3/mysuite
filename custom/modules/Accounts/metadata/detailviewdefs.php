<?php
$viewdefs ['Accounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          'SEND_CONFIRM_OPT_IN_EMAIL' => 
          array (
            'customCode' => '<input type="submit" class="button hidden" disabled="disabled" title="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}" onclick="this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'Accounts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';" name="send_confirm_opt_in_email" value="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
              'htmlOptions' => 
              array (
                'class' => 'button hidden',
                'id' => 'send_confirm_opt_in_email',
                'title' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
                'onclick' => 'this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';',
                'name' => 'send_confirm_opt_in_email',
                'disabled' => true,
              ),
            ),
          ),
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
          4 => 
          array (
            'customCode' => '{$mylistviewlink}',
          ),
          5 => 
          array (
            'customCode' => '{$downloadPdf}',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'myfield_c',
            'comment' => 'My Test Field Coustom',
            'label' => 'LBL_MYFIELD_C',
          ),
          1 => 
          array (
            'name' => 'lead_relate_name',
            'label' => 'LBL_LEAD_RELATE_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'testdropdown_c',
            'comment' => 'My Test DROP DOWN Coustom',
            'label' => 'LBL_TESTDROPDOWN',
          ),
          1 => 
          array (
            'name' => 'invoice_date_c',
            'comment' => 'Invoice Date',
            'label' => 'LBL_INVOICE_DATE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sent_syncarpha_c',
            'comment' => 'Usage Sent to Syncarpha',
            'label' => 'Sent Syncarpha---&gt;',
          ),
          1 => 
          array (
            'name' => 'datetime_test_c',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_TIME',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'datetime_std_my_c',
            'label' => 'LBL_DATETIME_STD_MY',
          ),
          1 => 
          array (
            'name' => 'std_currency_c',
            'label' => 'LBL_STD_CURRENCY',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'image_std_c',
            'studio' => 'visible',
            'label' => 'LBL_IMAGE_STD',
          ),
          1 => 
          array (
            'name' => 'image_sec_std_c',
            'studio' => 'visible',
            'label' => 'LBL_IMAGE_SEC_STD',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'relate_book_c',
            'studio' => 'visible',
            'label' => 'LBL_RELATE_BOOK_C',
          ),
          1 => 
          array (
            'name' => 'test_currency_c',
            'label' => 'LBL_TEST_CURRENCY',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'multi_c',
            'studio' => 'visible',
            'label' => 'LBL_MULTI',
          ),
          1 => 
          array (
            'name' => 'test_datetime_c',
            'label' => 'LBL_TEST_DATETIME',
          ),
        ),
      ),
      'LBL_PANEL_TEST'=>array(
        0=>array(
          0=>array(
            'name'=>"chart_test",
            'customCode'=>'{$chart}'
          )

        )
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'industry',
            'comment' => 'The company belongs in this industry',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => 
          array (
            'name' => 'employees',
            'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
            'label' => 'LBL_EMPLOYEES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
        ),
        3 => 
        array (
          0 => 'campaign_name',
        ),
      ),
    ),
  ),
);
;
?>
