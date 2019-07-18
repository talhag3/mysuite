<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/Sugarpdf/Sugarpdf.php');
require_once('include/Sugar_Smarty.php');

class AccountsSugarpdfpage extends Sugarpdf
{
    
    function process(){
        ob_clean();
        $this->display();
        $this->buildFileName();
        $this->Output('testPage','D');
    }

    function display()
    {   
        ob_clean();
        
        $smarty = new Sugar_Smarty();
     
        $html = $smarty->fetch("custom/modules/Accounts/tpls/pdfpage.tpl");
        $this->SetFont(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN);
        $this->SetMargins(25,12,25);
        $this->SetPrintHeader(false);
        $this->SetPrintFooter(false);
        $this->AddPage();
        $this->writeHTML($html, true, false, true, false, '');
        $this->Image('include/tcpdf/images/tcpdf_logo.jpg',140, 4, 130, 153, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
        $this->Image('include/tcpdf/images/tcpdf_logo.jpg',15, 192, 75, 113, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
    
    }

    function buildFileName()
    {
        $GLOBALS['log']->fatal("buildFileName");
        $this->fileName = 'example.pdf';
    }

    
}

