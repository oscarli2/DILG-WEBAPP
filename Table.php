<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="menu.css">
  <title>Summary | Completed SPs | AS of June 28, 2019</title>
  <style>
	body{
		background-color: #ffbb00;
		font: normal 15px Verdana, Arial, sans-serif;
	}

    table {
      width: 100%;
      border-collapse: collapse;
	background-color: white;

    }
	.summary {
  	padding-top: 5px;
 	 padding-right: 5px;
 	 padding-bottom: 5px;
  	padding-left: 80px;
	}
	.table {
  	padding-top: 5px;
 	 padding-right: 50px;
 	 padding-bottom: 5px;
  	padding-left: 50px;
	}
    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
<div class="header">
</div>
<div class="menu">
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="users.php">Users</a></li>
  <li><a href="table.php">Table Reports</a></li>
  <li><a href="#about">Graph Reports</a></li>
  <li style="float:right"><a href="#about">Logout</a></li>
</ul>
</div>

<div class="summary"><h2>Summary | Completed SPs | As of June 28, 2019</h2></div>
<div class="table">
<table>
    <tr>
      <th>Program</th>
      <th>Year</th>
      <th>Province</th>
      <th>Municipality/LGU</th>
      <th>Barangay</th>
      <th>Project</th>
      <th>Allocation</th>
      <th>Status</th>
      <th>PA%</th>
    </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dba";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT `PMO`, `Byear`, `Prov`, `City/Mun`, `Brgy`, `SP Type`, `Allocation`, `STATUS`, `%` FROM `dba_data` WHERE `STATUS` = 'COMPLETED' AND `%` = '100.00%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

      // Example data rows for demonstration
        echo "<tr>";
		echo "<td>". $row["PMO"]. "</td>";
		echo "<td>". $row["Byear"]. "</td>";
		echo "<td>". $row["Prov"]. "</td>";
		echo "<td>". $row["City/Mun"]. "</td>";
		echo "<td>". $row["Brgy"]. "</td>";
		echo "<td>". $row["SP Type"]. "</td>";
		echo "<td>". $row["Allocation"]. "</td>";
		echo "<td>". $row["STATUS"]. "</td>";
		echo "<td>". $row["%"]. "</td>";
        echo "</tr>";
}
}
?>
</table>
</div>
</body>
</html>
