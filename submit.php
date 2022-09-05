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
		
		$id = $title = $category = $subcategory = $oname = $address = $pincode = $logo = $banner ="";
        

        // Create Connection
            $conn = new mysqli ($servername, $username, $password, $dbname);

        //Check Connection
            if ($conn->connect_error)
            {
                die("Connection Failed. " .$conn->connect_error);
            }else

        //Taking Values form User
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $category = $_REQUEST['category'];
        $subcategoty = $_REQUEST['subcategory'];
        $oname = $_REQUEST['oname'];
        $address = $_REQUEST['address'];
        $pincode = $_REQUEST['pincode'];
        $logo = $_REQUEST['logo'];
        $banner = $_REQUEST['banner'];
        
        
        //Performing Insert
        $sql = "INSERT INTO submitlisting VALUES ('$id','$title','$category','$subcategory','$oname','$address','$pincode','$logo','$banner')";

        if(mysqli_query($conn, $sql))
        {
            echo "Data Stored Successfully:";
            echo nl2br("\n $id \n $title \n $category \n $subcategory \n $oname \n $address \n $pincode \n $logo \n $banner");
        }else
            echo "Error Storing Data $sql. " .mysqli_error($conn);
        
        mysqli_close($conn);
        
        ?>
    </body>
</html>