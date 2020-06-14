<html>
<body>
<?php
	if(!empty($_POST["advice"])&&empty($_POST["check"])&&!empty($_POST["email"])){
$servername = "****";
$database = "*****";
$username = "******";
$password = "******";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$advice=$_POST['advice'];
$email=$_POST['email'];
		$sqladd="INSERT INTO advices(advice,Email) VALUES ('$advice','$email')";

$result=mysqli_query($conn,$sqladd);

if($result==null){
echo "Eklenmedi yada bağlantınızda bir problem var";
}
else{
	echo "Başarıyla Kaydedildi";

}

mysqli_close($conn);
	}
	if(!empty($_POST["check"])&&empty($_POST["advice"])&&!empty($_POST["email"])){
$servername = "****";
$database = "*******";
$username = "*******";
$password = "*******";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$check=$_POST['check'];
$email=$_POST['email'];
		$sqladd="INSERT INTO advices(ticks,Email) VALUES ('$check','$email')";

$result=mysqli_query($conn,$sqladd);

if($result==null){
echo "Eklenmedi yada bağlantınızda bir problem var";
}
else{
	echo "Başarıyla Kaydedildi";

}

mysqli_close($conn);
	}
	
	
	
	
	
	
	?>

</body>
</html>
