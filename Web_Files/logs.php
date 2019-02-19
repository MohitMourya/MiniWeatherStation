<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logs</title>
	<style>
		table {
 		 border-collapse: collapse;
 		 width: 50%;
		}

		th, td {
	 	 text-align: center;
	 	 padding: 8px;
		}

		tr:nth-child(even){background-color: #d1c4e9 }
		tr:nth-child(odd){background-color: #e8daef }

		th {
		  background-color:#660099;
		  color: white;
		}
	</style>
</head>
<body bgcolor=" #6666CC ">
	<div align="center"><h1 style="color: white; font-family: Trebuchet MS">Weather Logs</h1></div>
	<div id="show"></div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('read.php')
			}, 2000);
		});
	</script>
	</div>
</body>
</html>