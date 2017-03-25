 <?php
$link=mysqli_connect("localhost","root","","design");
$data=$_POST['data'];
 for ($x = 0; $x < count($data); $x++) 
 {
	$val=mysqli_query($link,"insert into attendence(name,time,setted) values ('$data[$x]',NOW(),'yes')");
	echo mysqli_error($link);
 }
 $qu=mysqli_query($link,"select * from students");
 while($data1=mysqli_fetch_array($qu,MYSQLI_BOTH))
	{
		$val=0;
	for ($x = 0; $x < count($data); $x++) 
	{
	if($data1['name']==$data[$x])
		$val++;
	}
		if($val==0)
		{
		$na=$data1['name'];
		$q1=mysqli_query($link,"insert into attendence(name,time,setted) values ('$na',NOW(),'no')");
		}
	
	}
	echo "<script>alert('Attendence is sucessfully updated')</script>";
	echo "<script>window.location='index.php'</script>";

mysqli_close($link);
 ?>