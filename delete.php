<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
ini_set('display_errors', 1);
error_reporting(~0);
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "wdp";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$strID = $_GET["id"];
$sql = "DELETE FROM reviewss
WHERE id = '".$strID."' ";
$query = mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)) {
echo "Record delete successfully";
}
mysqli_close($conn);
?>
<form action="view.php">     
<p> <input type="Submit" value="view">
</p>
</form>

</body>
</html>