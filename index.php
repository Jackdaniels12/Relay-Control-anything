<html>
<head>
<meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<audio autoplay>
  <source src="201.wav" type="audio/mpeg">
</audio>

<?php
if (isset($_POST['LightON']))
{
exec("sudo python /home/pi/lighton_1.py");
}
if (isset($_POST['LightOFF']))
{
exec("sudo python /home/pi/lightoff_1.py");
}
if (isset($_POST['lowerLightON']))
{
exec("sudo python /home/pi/lighton_2.py");
}
if (isset($_POST['lowerLightOFF']))
{
exec("sudo python /home/pi/lightoff_2.py");
}
?>

<p style="color:orange;">Desk Light.</p>
<form method="post">
<button class="btn" name="LightOFF">Light OFF</button>&nbsp;
<button class="btn" name="LightON">Light ON</button><br><br>

<p style="color:orange;">Bed Light.</p>
<form method="post">
<button class="btn" name="lowerLightON">Light ON</button>&nbsp;
<button class="btn" name="lowerLightOFF">Light OFF</button><br><br>
</form> 


</html>
