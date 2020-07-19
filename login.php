<?php
require '/vendor/autoload.php';


use Parse\ParseClient;
use Parse\ParseUser;
 
ParseClient::initialize('wnITrSCa4phTcD32LB3Vum7pO2JjMrPg2l06gj7n', 'BJnSKY0NXVC19n3F1GSk0vDXAKXAfVjsSqsdXJiS', '28nmOZgyVFwt527cVC7knbPogvIslZjJxQvuhasf');


if(isset($_POST['Submit'])){
	
$Username =$_POST['username'];
$Password =$_POST['pass'];

//Login

try{
$user= ParseUser::logIn($Username, $Password);
        
} 
catch(ParseException $ex) {
	
echo "Error: " . $ex->getCode() . " " . $ex->getMessage();  }

}

echo "You have successfully logged in!";
$currentUser = ParseUser::getCurrentUser();	
echo "Welcome ".$currentUser."!";
echo '<a href="/webtemp/">Click here to go to the Homepage!</a>';

?>


 