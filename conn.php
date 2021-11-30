<?php
$conn = new mysqli('localhost','root','','trydb');
if ($conn) {
	echo '<script>alert("Connected successfully!!")</script>';
}
else{
	echo "failed";
}


?>