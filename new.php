<?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($username)) {
            echo $username." <br>";
        }
        if(isset($password)) {
            echo $password;
        }
    }

    //read data
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed'. mysqli_error());
    }

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    //read data
    while($row = mysqli_fetch_row($result)) {

        ?>
        <pre>
        <?php
        print_r($row);
        ?>
        </pre>
        <?php
    }
    ?>
</body>
</html>