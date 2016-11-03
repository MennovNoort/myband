<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
    include 'db.php';
/*$q = intval($_GET['q']);*/
    $q = strval($_GET['q']);
    
$con = mysqli_connect($host,$username,$password,$dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"myband_ajax");
$sql="SELECT * FROM nieuws WHERE text LIKE '%".$q."%'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>titel</th>
<th>text</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['titel'] . "</td>";
    echo "<td>" . $row['text'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>