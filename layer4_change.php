<?php
session_start();
?>
<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer5_change.php?var=" + name;
}
</script>



<title>
Choose image4!
</title>
</head>
<body> <font size="6" color="blue">Choose Image 4(for the new sequence)::</font>

<?php

include("connect.php");
			
			
                           $var=$_GET['var'];
                   
			$_SESSION['a1'][3]=$_GET['var'];	
			
		?>
<?php 
     
//$arr = array(0,1,2,3,4);
//shuffle($arr);
//$i=array("images\wood.jpg","images\bit.jpg","images\\edu.jpg","images\\two.jpg","images\\virus.jpg");
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
//<img src="'.$i[$arr[0]].'" onclick="changeIt(this)" height="120" width="120">
//<img src="'.$i[$arr[1]].'" onclick="changeIt(this)" height="120" width="120">
//<img src="'.$i[$arr[2]].'" onclick="changeIt(this)" height="120" width="120" >
//<img src="'.$i[$arr[3]].'" onclick="changeIt(this)" height="120" width="120">
//<img src="'.$i[$arr[4]].'" onclick="changeIt(this)" height="120" width="120">
for($i=0;$i<=4;$i++)
{
for($j=0;$j<=4;$j++){
echo '<img src="images\\'.$ar[$i][$j].'jpg" onclick="changeIt(this)" height="75" width="75"> ';

}
echo '<br>';

}
echo '</center>';
?>


</body>
</html>