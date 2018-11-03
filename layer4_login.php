<?php
session_start();
ob_start();
?>
<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer5_login.php?var=" + name;
}
</script>



<title>
Layer 4!
</title>
</head>
<?php
echo '<body bgcolor="#333333" text="#FFFFFF" marginwidth="45"> <center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<a href="logout.php"><font color="white">Logout</font></a><hr color="#CC0000">
<center><h5>Image Layer 4/5<br><i>Selecting any image will redirect you the next layer !<br>
Choose your Image ::<br>';

            $var=$_GET['var'];
			$_SESSION['a'][8]=$_GET['var'];
			$_SESSION['layer3']=$_GET['var'];
			
//$ar[0]="wood.";
//$ar[1]="edu.";
//$ar[2]="bit.";
//$ar[3]="two.";
//$ar[4]="virus.";
$ar = array(
        array("1.", "2.", "3.", "4.", "5."),
		array("6.", "7.", "8.", "9.", "10."),
		array("11.", "12.", "13.", "14.", "15."),
		array("16.", "17.", "18.", "19.", "20."),
		array("21.", "22.", "23.", "24.", "25.")
           );
shuffle($ar[0]);
shuffle($ar[1]);
shuffle($ar[2]);
shuffle($ar[3]);
shuffle($ar[4]);
shuffle($ar);

echo '<center>';
//for($i=0;$i<=4;$i++)
//echo '<img src="images\\'.$ar[$i].'jpg" onclick="changeIt(this)" height="120" width="120"> ';
for($i=0;$i<=4;$i++)
{
for($j=0;$j<=4;$j++){
echo '<img src="images\\'.$ar[$i][$j].'jpg" onclick="changeIt(this)" height="75" width="75"> ';

}
echo '<br>';

}
echo '</center>
</body>';
//echo '<footer><br><br><br><br><br><br><i><p align="right">Designed by <a href="https://www.facebook.com/RaJarshiSarkar"><font color="white">Rajarshi Sarkar</font></a> and <a href="https://www.facebook.com/saurabh290493"><font color="white">Saurabh Garg</font></a></i></footer>';			
?>

</body>
</html>