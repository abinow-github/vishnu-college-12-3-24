<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vishnu_db";

$mysqli= new mysqli($servername,$username,$password,$dbname);
if($mysqli->connect_error){
    die ("connectio faild:" . $mysqli->connect_error);
}
/*$servername="localhost";
$username="yugen_access";
$password="d+N7f%U02W,p";
$dbname="yugen_test";
*/
define('BASE_URL', 'http://localhost/vishnu-college-12-3-24');

?>
