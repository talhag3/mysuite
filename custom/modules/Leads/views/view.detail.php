<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



require_once('modules/Leads/views/view.detail.php');

class CustomLeadsViewDetail extends LeadsViewDetail {

	function CustomLeadsViewDetail(){
 		parent::ViewDetail();
 	}
	
	function display(){
        
        //My Api Key
        $apiKey  = 'AIzaSyB-lxVGyflTKbNK4LI1N5P6stEBor2mRA4';
        
        $street = $this->bean->primary_address_street;
        $city   = $this->bean->primary_address_city;
        $state  = $this->bean->primary_address_state;
        $postalcode = $this->bean->primary_address_postalcode;
        $country    = $this->bean->primary_address_country;
        
        //Center , the Address Google Search
        $center = $street.','.$city.','.$state.','.$postalcode.','.$country;
        
        //google Api Static Map 
        $url = 'https://maps.googleapis.com/maps/api/staticmap?
                center='.$center.'&zoom=19&size=600x400&markers='.$center.'&key='.$apiKey;
        
        // Populate Field with img tag        
        $this->bean->address_image_c = "<img src='$url' style='max-width:600px;padding:10px;'>";


        parent::display();
        
	}
 }

 ?>
	