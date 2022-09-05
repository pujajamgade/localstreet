<!DOCTYPE html>
<html>
    <head>
        <title>Insert Page</title>
    </head>
    <body>
        <?php error_reporting(E_ALL ^ E_NOTICE); ?>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "localtradestreet";
		
		$name = $email = $subject = $message ="";
        

        // Create Connection
            $conn = new mysqli ($servername, $username, $password, $dbname);

        //Check Connection
            if ($conn->connect_error)
            {
                die("Connection Failed. " .$conn->connect_error);
            }else

        //Taking Values form User
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        
        //Performing Insert
        $sql = "INSERT INTO contact VALUES ('$name','$email','$subject','$message')";

        if(mysqli_query($conn, $sql))
        {
            echo "Data Stored Successfully:";
            echo nl2br("\n $name \n $email \n $subject \n $message");
        }else
            echo "Error Storing Data $sql. " .mysqli_error($conn);
        
        mysqli_close($conn);
        
        ?>
    </body>
</html>