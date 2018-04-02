<?php

include '../includes/dbConn.php';
$dbConn = getConnection("midterm");

echo "List of all female students <br/ >";
$sql = "SELECT firstName, lastName, gender 
		FROM m_student  
		WHERE gender
		is F ";

?>