<!DOCTYPE html>

    <html>
        <head> </head> 
        <style>
            body {
                    text-align: center;
                    border: 2px solid orange;
                    background: black;
                    color: white;
            }
        </style>
        <?php 
$link = mysqli_connect("localhost", "root", "", "wdp");
  
if ($link === false) {
    die("ERROR: Could not connect. "
                .mysqli_connect_error());
}
mysqli_close($link);
?>

<?php 
$link = mysqli_connect("localhost", "root", "", "wdp");
  
if ($link === false) {
    die("ERROR: Could not connect. "
                .mysqli_connect_error());
}
  
$sql = "SELECT * FROM reviewss";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Phone</th>";
        echo "<th>E-mail</th>";
        echo "<th>Subject</th>";
        echo "<th>Message</th>";
        echo "</tr>";


       while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['subject']."</td>";
        echo "<td>".$row['message']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($res);
    }
    else {
    echo "No matching records are found.";
    }
    }
    else {
    echo "ERROR: Could not able to execute $sql. "
                            .mysqli_error($link);
    }
    mysqli_close($link);
    
    ?>

    <form action="edit.php">
             
    <p> <input type="Submit" value="Delete"> </p>

    </form>
    
    <form action="index.html#review">
    
    <p> <input type="Submit" value="Add"> </p>
    
    </form>
    </html>