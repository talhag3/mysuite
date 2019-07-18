<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class Viewbigview_oppor extends ViewDetail {


	function Viewbigview_oppor(){
		parent::ViewDetail();
	}
	
	function display() {
		echo "<div style='padding:30px;'>";
		echo "<pre><h2>Opportunity Name : ".$this->bean->name.'</h2></pre>';
		echo "<h4><u>Related Contacts</u></h4><br>";
		// display all contacts 
		if($this->bean->load_relationship('contacts')){
			$relatedBeans = $this->bean->contacts->getBeans();
			if($relatedBeans !=null){
				foreach($relatedBeans as $bean) {
					echo $bean->name.'<br>';
				}
			}
		}
		echo "</div>";
  	}

	function big_(){
		echo "<h2>Task- Display big Opportunities and Realted Contact</h2><br>";
        global $db;
		$result = $db->query("SELECT * FROM opportunities WHERE deleted=0 ");
		while($row = $db->fetchByAssoc($result)){
		$bean = BeanFactory::getBean("Opportunities",$row['id']);
		  // Opportunities between 100-500
		  if($bean->amount_usdollar >= 100 && $bean->amount_usdollar <= 500 ){
			echo "<div style='border:solid 1px #f08376;padding:5px;'>";
			echo '<h4><u><b>Opportunity Name </b></u>:'.$bean->name.'</h4>'; 
			echo '<h4><u><b>Opportunity Ammount </b></u>:$'.$bean->amount_usdollar.'</h4>';
			// Realted Contacts Table
			if ($bean->load_relationship('contacts')){
				$relatedContacts = $bean->contacts->getBeans();
                if($relatedContacts){
                    echo "<table class='table table-bordered'> <thead> <tr>";
					echo "<th><center>Realted Contacts</center><th>";
					echo "</tr><tr>";
					echo "<th>Name</th>";
					echo "<th>Phone</th>";
					echo "<th>Email</th>";
					echo "</tr> </thead> <tbody>";				
					foreach($relatedContacts as $contact){
						echo "<tr>";
						echo "<td> $contact->name </td>";
						echo "<td> $contact->phone_work </td>";
						echo "<td> $contact->email1 </td>";
						echo "</tr>";
					}
					echo "</tbody></table>";
				}
				else{
					echo "<h5 style='color:red;'>No Related Contacts</h5>";
				}
			}
			echo "</div><br><br>";
		  }
		} 
	}
}

?>