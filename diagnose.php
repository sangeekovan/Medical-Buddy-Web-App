<?php include('parsekey.php'); ?>
<?php include('functions.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Diagnosis | Medical Buddy'; ?></title>
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
$query = new ParseQuery("Symptoms");
$query->containedIn("Ambulance",
                  ["Ambulance Requested", "Ambulance Not Requested"]);
$results = $query->find();

$query = new ParseQuery("NonUserSymptoms");
$query->containedIn("Ambulance",
                  ["Ambulance Requested", "Ambulance Not Requested"]);
$results2 = $query->find();

$query = new ParseQuery("Symptoms");
$query->exists("user");
$results3 = $query->find();





echo '<table frame="box" style="width:100%" border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFF"> ';
  echo '<tr>';

	
   
  
   
    echo'<td><b>Symptoms/Injuries</b></td>';
    echo'<td><b>Calculated Diagnosis</b></td>';
     echo'<td><b>Ambulance Requirement</b></td>';
     echo'<td><b>User Location</b></td>';
  echo '</tr>';




for ($i = 0; $i <count($results); $i++) {
 
$object = $results[$i];


echo ' <tr>';

 echo '<td>'.$object->get('Symptom'). '</td>';
  echo '<td>'.$object->get('Diagnosis'). '</td>';
  echo '<td>'.$object->get('Ambulance'). '</td>';
  echo '<td>'.$object->get('UserGPS'). '</td>';
 echo ' </tr>';

}

for ($i = 0; $i <count($results2); $i++) {
 
$object = $results2[$i];


  echo '<tr>';
  echo '<td>'.$object->get('Symptom'). '</td>';
  echo '<td>'.$object->get('Diagnosis'). '</td>';
  echo '<td>'.$object->get('Ambulance'). '</td>';
  echo '<td>'.$object->get('UserGPS'). '</td>';
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