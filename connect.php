<?php 
$conn = oci_connect("redinurdin_07060", "redinurdin", "Localhost/XE");
if (!$conn) {
	$e = oci_error();
	echo $e['message'];
} else {
	echo "Selamat Datang di Server Sederhana"; 
}
