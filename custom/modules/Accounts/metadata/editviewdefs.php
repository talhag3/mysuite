<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'phone_office',
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
          ),
          1 => 
          array (
            'name' => 'phone_fax',
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
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            'customCode' => '<input type="text" title="" value="{$fields.description.value}" id="description" name="description" readonly="true">',
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
            'label' => 'LBL_TESTDROPDOWN',
          ),
          1 => 
          array (
            'name' => 'invoice_date_c',
            'label' => 'LBL_INVOICE_DATE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sent_syncarpha_c',
            'label' => 'Sent Syncarpha--->',
          ),
          1 => 
          array (
            'name' => 'datetime_test_c',
            'comment' => 'Creating DateTime',
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
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'account_type',
          1 => 'industry',
        ),
        1 => 
        array (
          0 => 'annual_revenue',
          1 => 'employees',
        ),
        2 => 
        array (
          0 => 'parent_name',
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
