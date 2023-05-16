<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head-imports.php"); ?>
    <title>Register form</title>
</head>

<body>

    <?php include("includes/header.php"); ?>
    <?php include("includes/navigation.php"); ?>

    <div class="container w-75 p-5 border shadow-sm rounded form form-group mx-auto" id="main-content">

        <?php
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sqlcourse";

        // Create connection
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Check connection  
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "<h3>Connected successfully ☑️ </h3>";
        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`) VALUES('$first_name',' $last_name', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<h3>New record created successfully ☑️</h3><br>";
            echo "<a id='db' href='database.php' role='button'>" . "SHOW DATABASE" . "</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();

        ?>

    </div>
    <?php include("includes/script-imports.php"); ?>
    <?php include("includes/footer.php"); ?>

</body>

</html>