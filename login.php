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
		
		$admin = $email = $password ="";
        

        // Create Connection
            $conn = new mysqli ($servername, $username, $password, $dbname);

        //Check Connection
            if ($conn->connect_error)
            {
                die("Connection Failed. " .$conn->connect_error);
            }else

        //Taking Values form User
        $admin = $_REQUEST['admin'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
       
        
        //Performing Insert
        $sql = "INSERT INTO login VALUES ('$admin','$email','$password')";

        if(mysqli_query($conn, $sql))
        {
            echo "Data Stored Successfully:";
            echo nl2br("\n $admin\n $email \n $password");
        }else
            echo "Error Storing Data $sql. " .mysqli_error($conn);
        
        mysqli_close($conn);
        
        ?>
    </body>
</html>