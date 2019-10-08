<?php
function run()
{
	echo "<table>";
			echo "<tr>";
	for ($i = 0; $i <= 100; $i++) {

		for ($j = 0; $j <= 100; $j++) {
			if ($i == 0 && $j == 0) {
				echo "<td> </td>";
			} else if ($i == 0) {
				echo "<th>" . $j . "</th>";
			} else if ($j == 0) {
				echo "<th>" . $i . "</th>";
			}
			$k = $i * $j;
			echo "<td>$k</td>";
		}
		echo "</tr>";
	}

	echo "</table>";
}
	run();
?>
