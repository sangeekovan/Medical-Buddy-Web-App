<?php include('functions.php'); ?>
<?php include('parsekey.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Patient List | Medical Buddy'; ?></title>
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

use Parse\ParseQuery;

try{
$query = new ParseQuery("UserProfile");
$query->exists("objectId");
$results = $query->find();


echo "<b>Successfully retrieved " . count($results) . " patients.</b><br><br>";

echo '<table frame="box" style="width:100%" border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFF"> ';
  echo '<tr>';
    echo'<td><b>Firstname</b></td>';
    echo'<td><b>Lastname</b></td>';
    echo'<td><b>Gender</b></td>';
    echo'<td><b>Address</b></td>';
    echo'<td><b>Contact</b></td>';
    echo'<td><b>Insurance Company</b></td>';
    echo'<td><b>Insurance Policy No</b></td>';
    echo'<td><b>Medical Conditions</b></td>';	
    echo'<td><b>Medications</b></td>';	
  echo '</tr>';

for ($i = 0; $i <count($results); $i++) {
 
$object = $results[$i];


  echo '<tr>';
  echo '<td>'.$object->get('Firstname'). '</td>';
  echo '<td>'.$object->get('Lastname'). '</td>';
  echo '<td>'.$object->get('Gender'). '</td>';
  echo '<td>'.$object->get('Address'). '</td>';
  echo '<td>'.$object->get('Contact'). '</td>';
  echo '<td>'.$object->get('InsuranceComp'). '</td>';
  echo '<td>'.$object->get('InsurancePolicy'). '</td>';
  echo '<td>'.$object->get('MedicalCondition'). '</td>';
 echo '<td>'.$object->get('Medication'). '</td>';
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