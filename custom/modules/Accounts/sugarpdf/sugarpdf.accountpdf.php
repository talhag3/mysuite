<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/Sugarpdf/Sugarpdf.php');

class AccountsSugarpdfaccountpdf extends Sugarpdf
{
    
    function process(){
        $GLOBALS['log']->fatal("process");
        $this->preDisplay();
        $this->display();
        $this->buildFileName();
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

    function preDisplay()
    {  
        $GLOBALS['log']->fatal("preDisplay");
        //Adds a predisplay page
        $this->AddPage();
        $this->SetFont(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN);
        $this->Ln();
        $this->MultiCell(0,0,'Predisplay Content',0,'C');
    }

    function display()
    {
        $GLOBALS['log']->fatal("display");
        //add a display page
        $this->AddPage();
        $this->SetFont(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN);
        $this->Ln();
        $this->MultiCell(0,0,'Display Content',0,'C');
    }

    function buildFileName()
    {
        $GLOBALS['log']->fatal("buildFileName");
        $this->fileName = 'example.pdf';
    }

    protected function drawLine()
    {
        $GLOBALS['log']->fatal("drawLine");
        $this->SetLineStyle(array('width' => 0.85 / $this->getScaleFactor(), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(220, 220, 220)));
        $this->MultiCell(0, 0, '', 'T', 0, 'C');
    }
}

