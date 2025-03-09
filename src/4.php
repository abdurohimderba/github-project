 <?php 
$con=mysqli_connect("localhost","root","");
if($con===false)
{
    die("cannot connect".mysqli_error());
}
$db = mysqli_select_db($con,"school");
if($db===false)
{
    die("cannot select db" .mysqli_error());
}
$sql="create table student(id int primary key,name varchar(20),age int)";
if(mysqli_query($con,$sql)===true)
{
echo "table created successfully";
}
else
{
die("cannot create".mysqli_error());
}
 ?>