<?php
//including the database connection file
include_once("config.php");


 // using mysqli_query instead
 $sql = "SELECT * FROM clientInfo";
$result = mysqli_query($mysqli, $sql);

?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="Add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>topic</td>
		<td>NumberOfWords</td>
		<td>Instructions</td>
        <td>ScheduledDeliveryDate</td>
		
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['topic']."</td>";
		echo "<td>".$res['NumberOfWords']."</td>";
        echo "<td>".$res['Instructions']."</td>";
		echo "<td>".$res['ScheduledDeliveryDate']."</td>";	
		echo "<tr>";
		//echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
</table>
</body>
</html>
