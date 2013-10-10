<!DOCTYPE html>

<html lang = "en">

<head>

  <meta charset="utf-8">
  <title> Assign_4_Part_2 </title>
  <link rel="stylesheet" type="text/css" href="calendar.css">

</head>

<body>
<h1> Current date and time:
<?php
date_default_timezone_set('America/New_York');
$date = date('m/d/Y h:i:s a');
print $date;
?>
</h1>
<table>
<tr><th>Time</th> <th>Bob</th> <th>Sue</th> <th>Frank</th>
<?php

$hours_to_show = 12;

function get_hour_string($hours){
  if ($hours <=0){
    $hours = $hours + 12;
  }
  return $hours . " " . date('a');
}

for ($x=0; $x<$hours_to_show; $x++){
  $rowHour = get_hour_string(date('h')-$x);
  if($x%2===0){
print "<tr class = 'color1'> <td> $rowHour </td> <td></td> <td></td> <td></td> </tr>";
  }else{
    print "<tr class = 'color2'> <td> $rowHour </td><td></td> <td></td> <td></td> </tr>";
  }
}
?>
</table>

</body>

</html>

