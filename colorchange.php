<!DOCTYPE html>
<html>
<head>
<title>
color change by day
</title>
<?php
$daysofweek = array(
'Sunday' => '#FF5733',
'Monday' => '#33FF57',
'Tuesday' => '#3357FF',
'Wednesday' => '#FFFF33',
'Thursday' => '#FF33FF',
'Friday' => '#33FFFF',
'Saturday' => '#FF3333'
);
$currentday = date('l'); // corrected from '1' to 'l' (lowercase L for full day name)
$backgroundcolor = '#FFFFFF'; // fixed typo in hex color
if (array_key_exists($currentday, $daysofweek)) {
$backgroundcolor = $daysofweek[$currentday];
}
?>
<style>
body {
background-color: <?php echo $backgroundcolor; ?>;
}
</style>
</head>
<body>
<h1>Welcome! Today is <?php echo $currentday; ?></h1>
</body>
</html>
