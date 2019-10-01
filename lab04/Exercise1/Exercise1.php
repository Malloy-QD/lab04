<?php
echo "<table border =\"1\" style='border-collapse: solid black'>";

	for ($i=1; $i <= 100; $i++) {
		echo "<tr> \n";
		for ($j=1; $j <= 100; $j++) {
		   $k = $i * $j;
		   echo "<td>$k</td> \n";
}
	  	   echo "</tr>";
		}

		echo "</table>";
?>
