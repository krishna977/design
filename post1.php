 <?php
 $link=mysqli_connect("localhost","root","","design");
$data=strip_tags($_POST['classwork']);
if(mysqli_query($link,"insert into classwork(data) values ('$data')"))
{
	echo "<script>alert('Classwork is sucessfully updated')</script>";
	echo "<script>window.location='index.php'</script>";
}	
else
{
	echo "<script>alert('Technical problem occured please try again')</script>";
	echo "<script>window.location='index.php'</script>";
}
mysqli_close($link);
 ?>