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
window.location.href = "layer2_regi.php?var=" + name;
}
</script>

<title>
Layer 1!
</title>
</head>
<?php
echo '<body bgcolor="#333333" text="#FFFFFF" marginwidth="45"> <center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
</a><hr color="#CC0000">
<center><h5>Image Layer 1/5<br><font color="orange">Complete all the layers to complete your registration !</font><br>
Choose your Image ::<br>';
//$ar[0]="wood.";
//$ar[1]="edu.";
//$ar[2]="bit.";
//$ar[3]="two.";
//$ar[4]="virus.";
//$ar[0]="1."; $ar[1]="2."; $ar[2]="3."; $ar[3]="4."; $ar[4]="5.";
//$ar[5]="6."; $ar[6]="7."; $ar[7]="8."; $ar[8]="9."; $ar[9]="10.";
//$ar[10]="11."; $ar[11]="12."; $ar[12]="13."; $ar[13]="14."; $ar[14]="15.";
//$ar[15]="16."; $ar[16]="17."; $ar[17]="18."; $ar[18]="19."; $ar[19]="20.";
//$ar[20]="21."; $ar[21]="22."; $ar[22]="23."; $ar[23]="24."; $ar[24]="25.";
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
for($i=0;$i<=4;$i++)
{
for($j=0;$j<=4;$j++){
echo '<img src="images\\'.$ar[$i][$j].'jpg" onclick="changeIt(this)" height="75" width="75"> ';

}
echo '<br>';

}
echo '</center>
</body>';


//echo '<br><footer><br><br><br><br><br><br><br><br><br><br><br><i><p align="right">Designed by <a href="https://www.facebook.com/RaJarshiSarkar"><font color="white">Rajarshi Sarkar</font></a> and <a href="https://www.facebook.com/saurabh290493"><font color="white">Saurabh Garg</font></a></i></footer>';			
?>
</html>