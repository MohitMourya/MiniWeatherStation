<?php
		require_once "config.php";
		$sql = "SELECT log,temp,hum FROM weather ORDER BY log DESC";
		$result = mysqli_query($link,$sql);
		if (mysqli_num_rows($result) > 0) {

			echo "<table align='center' style='border-collapse: collapse; font-size: 20px;font-family: Trebuchet MS'><tr> <th>Date - Time</th><th>Temperature (°C)</th><th>Humidity</th></tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td width=30 align='center'>" . $row['log'] . "<td width=10 align='center'>" . $row['temp'] . "</td><td width=10 align='center' > " . $row['hum'] . "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "<b>No Record Found</b>";
		}
		// Close connection
		mysqli_close($link);
?>
