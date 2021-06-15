<?php

if(isset($_POST['submit'])) {
    // echo "click submit";

    $username = $_POST['username'];
    $password = $_POST['password'];

    // $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "Connected";
    } else {
        die("Not connected");
    }

    //write data
    //$query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group my-2">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group my-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>