<?php
$server="localhost";
$user="root";
$password="";
$database="baza";

$con=mysqli_connect($server,$user,$password,$database);
if( !$con){
	die("Nie udało się połączyć: "). mysqli_error();
}

$data=$_POST['data'];
$ile=$_POST['ilosc'];
$telefon=$_POST['telefon'];

$sql="INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUE($data, $ile, $telefon)";



// $con = mysqli_connect('localhost', 'root', '', 'baza');
// if(isset($_POST['rezerwuj'])) {
// 	$data = $_POST['data'];
// 	$ilosc = $_POST['ilosc'];
// 	$telefon = $_POST['telefon'];
// 	$kw = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', $ilosc, '$telefon');";
// 	mysqli_query($con, $kw);
// 	echo "Dodano rezerwcje do bazy";
// }
// mysqli_close($con);
?>