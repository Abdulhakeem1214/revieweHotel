<!DOCTYPE html>

    <html>
        <head>  <title>Insert Page page</title> </head> 
        <style>
.button {
    height: 47px;
    width: 170px;
    border: 2px solid orange;
    background: orange;
    color: white;
    font-size: 20px;
    font-weight: 600;
    border-radius: 6px;
    cursor: pointer;
    display: block;
    margin-left: auto;
    margin-right: auto;

} 

body {
    text-align: center;
    border: 2px solid orange;
    background: black;
    color: white;
}
</style>
            <body>
                <br>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "wdp");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO reviewss  VALUES ('$name','$phone','$email','$subject','$message')";
         
        if(mysqli_query($conn, $sql)){
echo "<h1>Data stored in a database successfully Please browse your localhost php my admin to view the updated data</h1>";

        //  echo nl2br("\n$first_name\n $last_name\n "
        //   . "$gender\n $address\n $email");
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }     
        // Close connection
            mysqli_close($conn);
            ?>

            <h1>view data form Database</h1>
            <form action="view.php" method="get">
                 
    <p> <input class="button" type="submit" value="view">
                </p>
            </form>

       </body>
    </html>
    