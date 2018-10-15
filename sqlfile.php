<?php
$conn=mysqli_connect("localhost","root","","internship");
$myarr=array();
$i=0;
if (isset($_GET['organisation'])) {
	$organisation=$_GET['organisation'];
	$sql="select * from experience where organisation='$organisation'";
$result=mysqli_query($conn,$sql);
 $rows = array();
while ($row=mysqli_fetch_assoc($result)) {
	$myobj->location=$row['location'];
	$myobj->organisation=$row['organisation'];
	$myobj->appmode=$row['appmode'];

	$myobj->selectionpro=$row['selectionpro'];
	$myobj->technical=$row['technical'];
	$myobj->analyticalq=$row['analyticalq'];

	$myobj->hrq=$row['hrq'];
	$myobj->suggesion=$row['suggesion'];
	$myobj->name=$row['name'];
	
$myarr[$i]= json_encode($myobj);
 $rows[] = $row;
 
$i++;
}
/*
echo "[";
for ($j=0; $j <$i ; $j++) { 
	echo $myarr[$j].",";
}
echo "]";
*/
print json_encode($rows);
}








$rows[]=array();
if (isset($_GET['appmode'])) {
	$appmode=$_GET['appmode'];
	$sql="select * from experience where appmode='$appmode'";
$result=mysqli_query($conn,$sql);
 $rows = array();
while ($row=mysqli_fetch_assoc($result)) {
	
 $rows[] = $row;
 
$i++;
}

print json_encode($rows);
}








































/*if (!$conn) {
	# code...
}
echo "success";
class sql1 
{
	
	function all(){
		$conn=mysqli_connect("localhost","root","","internship");
$sql="select * from experience";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
	echo $row['name'];
}

	}
}
$sql1 =new sql1;
$sql1->all();
*/
?>