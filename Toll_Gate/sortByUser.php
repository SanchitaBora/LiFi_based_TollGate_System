<!DOCTYPE html>
<html>
<head>
<style>
.tb table {
    width: 100%;
    border-collapse: collapse;
}

.tb table, td, th {
    border: 1px solid black;
    padding: 5px;
}

.tb th {text-align: left;}
</style>
</head>
<body>

<?php
require('db_connection.php');
$q = $_GET['q'];

$sql="SELECT * FROM bill WHERE u_id = '".$q."'";
$result = $conn->query($sql);

echo "<table class='tb'>
<tr>
<th>Bill No</th>
<th>User Name</th>
<th>Branch code</th>
<th>Cust. Name</th>
<th>Vehicle No.</th>
<th>Price</th>
<th>Date</th>
</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['u_id'] . "</td>";
    echo "<td>" . $row['branch_code'] . "</td>";
   	echo "<td>" . $row['c_name'] . "</td>";
	echo "<td>" . $row['v_no'] . "</td>";
	// echo "<td>" . $row['v_type'] . "</td>";
	echo "<td>" . $row['v_price'] . "</td>";
	echo "<td>" . $row['v_date'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
