<?php

class logic_hooks_class{
    
    private $panel = '
    <div class="panel panel-default">
    <div class="panel-heading">
        <a class="" role="button" data-toggle="collapse" href="#google_chart_panel"
            aria-expanded="false">
            <div class="col-xs-10 col-sm-11 col-md-11">
                Google Chart Panel
            </div>
        </a>
    </div>

    <div class="panel-body panel-collapse collapse in panelContainer"
        id="google_chart_panel" >
        <div class="tab-content">
            <!-- TAB CONTENT -->
            <div>
               <h1>Hello</h1>
            </div>
        </div>
    </div>
</div>
    ';

    function after_ui_frame_method($event, $arguments){
        if($_REQUEST['action']=='DetailView'){
            echo $this->panel;
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";
            echo $GLOBALS['from_e_hook'];
        }
    }

    //after_entry_point_method
    function after_entry_point_method($event, $arguments){
        if($_REQUEST['action']=='DetailView'){
            $GLOBALS['from_e_hook'] ="Hi";
        }
    }
}