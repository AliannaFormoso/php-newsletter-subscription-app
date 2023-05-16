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
    <?php error_reporting(E_ALL ^ E_NOTICE); ?>
    <?php error_reporting(0); ?>
    <div class="container w-75 p-5 border shadow-sm rounded form form-group mx-auto" id="main-content">
        <?php

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sqlcourse";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT id, first_name, last_name, email FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<h3>Database records: </h3>";
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td> id: " . $row["id"] . " </td><td> Full Name: " . $row["first_name"] . " " . $row["last_name"] . " </td><td> Email: " . $row["email"] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();

        ?>
    </div>
    <?php include("includes/script-imports.php"); ?>
    <?php include("includes/footer.php"); ?>

</body>

</html>