<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/SugarPHPMailer.php'); 
include_once('include/utils/db_utils.php'); // for from_html function

class Lead_Hook
{
/*  function after_save_SendEmail($bean, $event, $arguments)
    {  
        //$email_template_bean = BeanFactory::getBean('EmailTemplates','5d6874a1-cae8-d712-6235-5abcef9742e2');
       
        $email_template_bean = new EmailTemplate();
        $email_template_bean = $email_template_bean->retrieve("5d6874a1-cae8-d712-6235-5abcef9742e2");
        
        $temp = array();

        $email_template_bean->parsed_entities = null;
        $template_data = $email_template_bean->parse_email_template(
                    array(
                    "subject" => $email_template_bean->subject,
                    "body_html" => $email_template_bean->body_html,
                    "body" => $email_template_bean->body
                      ), 
                    'Leads',
                    $bean, 
                    $temp); 
        
        $emailObj = new Email(); 
        $defaults = $emailObj->getSystemDefaultEmail(); 
        $mail = new SugarPHPMailer(); 
        $mail->setMailerForSystem(); 
        $mail->From = $defaults['email']; 
        $mail->FromName = $defaults['name']; 
        $mail->Subject = $template_data['subject']; 
        
        $body = $template_data['body_html'];

        $mail->Body = $body; 
        
        $mail->isHTML(true);
        $mail->AddAttachment("upload/ea79395c-bd12-1929-776e-5aa7770f7db0","ea79395c-bd12-1929-776e-5aa7770f7db0",'base64','image/gif');

        $mail->prepForOutbound();
        $mail->AddAddress($defaults['email']);
        if (!$mail->Send()) {
            $GLOBALS['log']->fatal("ERROR: Mail sending failed!");
        }
} */
    

    //Add converted contact to related target lists of current lead
    function add_contact_to_targetList($bean,$event,$arguments) {
        
        // Check Lead Status
        if($bean->status== "Converted" && $bean->converted == "1" && $bean->contact_id ) {

            // Load Relationship Lead And Target List
            if($bean->load_relationship('prospect_lists')) {
                // Get All Target List Bean Related to Lead  
                $target_lists = $bean->prospect_lists->getBeans();

                // Loop All Target Lists 
                foreach($target_lists as $target_list) {
                    //Now Load Relationship b/w Target List and Contacts
                    if($target_list->load_relationship('contacts')) {   
                        //Add converted contact to (current) target list
                        $target_list->contacts->add($bean->contact_id);
                        // Remove Lead From (current) Target List
                        $bean->prospect_lists->delete($bean->id, $target_list->id);
                    }  
                }
            }
        }
    }
}
?>