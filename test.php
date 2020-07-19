<?php include('parsekey.php'); ?>
<?php include('functions.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Incoming Patient | Medical Buddy'; ?></title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1>Medical Buddy</h1>
				<p>Welcome to Medical Buddy, view incoming patients and their information!</p>
			</div>
			<div id="navigation">
				<?php echo do_main_nav() ; ?>
			</div>
<?php
include('parsekey.php');

use Parse\ParseQuery;


try{
$query = new ParseQuery("UserProfile");
$query->exists("objectId");
$results = $query->find();


echo '<table frame="box" style="width:100%" border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFF"> ';
  echo '<tr>';
    echo'<td><b>Symptoms/Injuries</b></td>';
    echo'<td><b>Ambulance Requirement</b></td>';
    echo'<td><b>Calculated Diagnosis</b></td>';
  echo '</tr>';


for ($i = 0; $i <count($results); $i++) {
 
$object = $results[$i];

  echo '<tr>';
  echo '<td>'.$object->get('Firstname'). '</td>';
  echo '<td>'.$object->get('Lastname'). '</td>';
  echo '<td>'.$object->get('Gender'). '</td>';
 echo ' </tr>';

}




echo '</table>';	
			

 } 

catch (Exception $e){
    echo $e->getMessage();
 }

      

?>
			

			<div id="footer">
				<div class="footer_half">
					<p>&copy;Sangeeta Ellankovan 2015</p>
				</div>
				<div class="footer_half t_align_right">
					<p>Powered by <a href="http://http://newinti.edu.my/main/">INTI</a></p>
				</div>
			</div>
		</div>
	</body>
</html>