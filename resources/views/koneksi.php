
<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "registrations";

$db = mysqli_connect ($server, $user, $password, $nama_database);
if(!$db) {
	die ("Belum terhubung dengan database;" . mysqli_connect_error());
}
?>