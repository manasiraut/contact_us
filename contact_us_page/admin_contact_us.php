<!DOCTYPE html>
<html>
<head>
	<title>Contact Details</title>
	<style type="text/css">
	table{
	margin-left: auto;
	margin-right: auto;
	border: 2px solid black;
	background-color: #FFC;
    }
    th{
    	text-align: center;
    	font-size: 25px;
    border-bottom: 5px solid #000;
    }
    td{
    	text-align: center;
    	border-bottom: 2px solid #666
    }
    
    </style>
</head>
<body>
	<h1 style="text-align: center;">Cutomers Queries</h1>

<?php 

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '');
DEFINE ('DB_NAME', 'mydatabase');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
$sqlget = "SELECT * FROM contact_us";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error getting');

echo "<table>";
echo "<tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>MESSAGE</th>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['id'];
	echo "</td><td>";
	echo $row['name'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['message'];
	echo "</td></tr>";
}

echo "</table>";

?>

</body>
</html>


