 <html>
<head>
<title>Delete</title>
</head>

<style>
            body {
                    text-align: center;
                    border: 2px solid orange;
                    background: black;
                    color: white;
            }
        </style>

<body>
<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "wdp";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$sql = "SELECT * FROM reviewss";
$query = mysqli_query($conn,$sql);
?>
<table width="1500" border="1">
<tr>
<th width="150"> <div align="center">Name</div></th>
<th width="90"> <div align="center">Phone </div></th>
<th width="180"> <div align="center">Email</div></th>
<th width="180"> <div align="center">Subject</div></th>
<th width="750"> <div align="center">Message</div></th>

</tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<tr>
<td><?php echo $result["name"];?></td>
<td><?php echo $result["phone"];?></td>
<td><?php echo $result["email"];?></td>
<td><?php echo $result["subject"];?></td>
<td><?php echo $result["message"];?></td>
<td align="center"><a style="color:red;" href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?id=<?php echo $result["phone"];?>';}">Delete</a> </td>

</tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>