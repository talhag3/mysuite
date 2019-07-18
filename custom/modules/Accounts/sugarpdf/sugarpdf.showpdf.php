<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/Sugarpdf/Sugarpdf.php');
require_once('include/Sugar_Smarty.php');

class AccountsSugarpdfshowpdf extends Sugarpdf
{   
    function process(){
        // $GLOBALS['log']->fatal("process");
        ob_clean();
        $this->display();
        $this->buildFileName();
        $this->Output('myfile','D');
    }

    public function Header()
    {   $GLOBALS['log']->fatal("Header");
        $this->SetFont(PDF_FONT_NAME_MAIN, 'B', 16);
        $this->MultiCell(0, 0, 'TCPDF Header',0,'C');
        $this->drawLine();
    }

    public function Footer()
    {   $GLOBALS['log']->fatal("Footer");
        $this->SetFont(PDF_FONT_NAME_MAIN, '', 8);
        $this->MultiCell(0,0,'TCPDF Footer', 0, 'C');
    }

  

    function display()
    {

        //Adds a predisplay page
        // $this->AddPage();
        // $this->SetFont(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN);
        // $this->MultiCell(0,0,$this->bean->id,0,'C');
        // $this->MultiCell(0,0,$this->bean->name,0,'C');
        // $this->Ln();
        // $this->MultiCell(0,0,'Predisplay Content',0,'C');

        
        //add a display page
        $this->AddPage();
        $this->SetFont(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN);
        
        $SS = new Sugar_Smarty();

        $SS->assign("record_id",$this->bean->id);
        $SS->assign("record_name",$this->bean->name);

        $html = $SS->fetch('custom/modules/Accounts/tpls/new.tpl');

        $this->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        $this->Ln();
        $this->MultiCell(0,0,'Display Content',0,'C');


    }

    function buildFileName()
    {
        $GLOBALS['log']->fatal("buildFileName");
        $this->fileName = 'exampple.pdf';
    }

    protected function drawLine()
    {
        $GLOBALS['log']->fatal("drawLine");
        $this->SetLineStyle(array('width' => 0.85 / $this->getScaleFactor(), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(220, 220, 220)));
        $this->MultiCell(0, 0, '', 'T', 0, 'C');
    }
}

