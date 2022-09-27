<!DOCTYPE html>

    <html>
        <head>  <title>Insert Page page</title> </head> 
            <body>
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
echo "<h3>data stored in a database successfully Please browse your localhost php my admin to view the updated data</h3>";

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
                 
    <p> <input type="Submit" value="view">
                </p>
            </form>

       </body>
    </html>
    