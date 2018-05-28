
<?php 
session_start();
 
const HOSTNAME = 'signepetersen.dk.mysql'; // server navn
const MYSQLUSER = 'signepetersen_dk_mydailyspace'; // super bruger (remote har man særskilte database brugere)
const MYSQLPASS = '0208signe'; // bruger password
const MYSQLDB = 'signepetersen_dk_mydailyspace'; // database navn 


$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

$con->set_charset('utf-8');


if($con->connect_error){ 
	die($con->connect_error);
}

?>
