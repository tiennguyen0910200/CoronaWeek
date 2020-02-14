<?php 
$db = new mysqli("localhost", "root", "", "CoronaDatabase");
$sql = "SELECT * from Inf";
$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);

?>