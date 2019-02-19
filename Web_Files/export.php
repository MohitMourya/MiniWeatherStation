<?php
require_once "config.php";
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$fp = fopen("php://output", 'w');
fputcsv($fp, array('log','temp','hum'));
$query='SELECT * FROM weather';
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_assoc($result)) {
    fputcsv($fp, $row);
}
fclose($fp);
?>
