<?php
	include('includes/class-theme-methods.php');
	

	function do_main_nav() {
		global $dtm;
		
		$class = "main_nav";
		
		$items_array = array ( 
		array('text' => 'Homepage', 'url' => '/webtemp'),
		array('text' => 'Incoming Patients', 'url' => 'patientlist.php'),
		array('text' => 'Diagnose', 'url' => 'diagnose.php'),
		array('text' => 'Settings', 'url' => 'settings.php'),
		array('text' => 'Logout', 'url' => 'logout.php')
		
								);
		
		return $dtm->navigation($items_array, $class);
	}
	
	function do_html_title($page_title) {
		$title = $page_title . ' | Medical Buddy';
		
		return $title;
	}
?>