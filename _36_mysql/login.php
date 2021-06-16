<?php include "db.php";

// if (isset($_POST['submit'])) {
// $username = $_POST['username'];
// $password = $_POST['password'];
// $query = "INSERT INTO users(username,password) ";
// $query .= "VALUES ('$username', '$password')";
$query = "SELECT * FROM users";

// global $result;
$result = mysqli_query($connection, $query);
// }
// print($result);
// print($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            // print_r($row);
                            $id = $row['id'];
                            echo "<option value='$id'>$id</option>";
                        }
                        ?>
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>
</body>

</html>