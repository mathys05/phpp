<?php
$server = "localhost"; $user = "root"; $pass = "root"; $database = "tpfinal_mathieubrignon";
try { 
   $conn = mysqli_connect($server, $user, $pass, $database);
} 
catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
}
?>