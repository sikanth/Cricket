<?php

$con=mysqli_connect('localhost','root','','mydb');


if($con){

echo"<h2><center> Well Played  Keep increase your batting style  </center> </h2> ";
}

if(!mysqli_select_db($con,'mydb')){

	echo"data base not selected";

}




$Name=$_POST['name'];
$Date= date('Y-m-d');
$City=$_POST['city'];
$Mobile=$_POST['number'];
$Score=$_POST['score'];
$Over=$_POST['over'];
$Leg=$_POST['half'];
$Half=$_POST['leg'];
$Four=$_POST['four'];
$Six=$_POST['six'];
$Wicket=$_POST['wicket'];



$sql="INSERT INTO score(Name,Date,City,Mobile,Score,Overs,Leg,Half,Four,Six,Wicket) VALUES('$Name','$Date','$City','$Mobile','$Score','$Over','$Leg','$Half','$Four','$Six','$Wicket')";


if(!mysqli_query($con,$sql))
{
	echo"Not inserted";
}
else
{
	echo"<h3>Congratulations :".$Name."\t \t </h3>";
}

header("refresh:2 ;url=newgame.html" );

?>
