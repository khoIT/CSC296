<?php
	
	$db = mysqli_connect('instance40059.db.xeround.com','csc296','csc296','test','7815');
	$res = mysqli_query($db,"select * from beans");
	$num_rows = mysqli_num_rows($res);
	
	echo '<table border ="1"><tr>';
	echo '<tr>';
	echo '<td><b>Flavor</b></td>';
	echo '<td><b>Inventories</b></td>';
	echo '<td><b>Count</b></td>';
	echo '<td><b>Price</b></td>';
	echo '</tr>';
	while ($row = mysqli_fetch_assoc($res)){
		echo'<tr>';
		echo '<td>'.$row['flavor'].'</td>';
		echo '<td>'.$row['count'].'</td>';
		echo '<td>'.$row['price'].'</td>';
		echo '<td>'.$row['count']*$row['price'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
?>
