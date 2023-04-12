<?php
if (isset($_POST['login'])) {
    $username = "Nischal65";
    $password = "Nischal123";

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $wrong_pass_counter = 0;
    $login_status = "active";
    if ($login_status = "active") {
        if ($username == $input_username) {
            if ($password == $input_password) {
                session_start();
                $_SESSION['username'] = $username;
                header('location:dashboard.php');
            } else {
                $wrong_pass_counter++;
                echo ("$wrong_pass_counter");
                if ($wrong_pass_counter > 3) {
                    $cookie_name = "block_time";
                    $cookie_value = "block";
                    setcookie($cookie_name, $cookie_value, time() * 60, "/");
                    if ($_COOKIE[$cookie_name]) {
                        $login_status = "blocked";
                    } else {
                        $login_status = "active";
                        $wrong_pass_counter = 0;
                    }
                }
            }
        } else {
            $wrong_pass_counter++;
            echo ("$wrong_pass_counter");
            if ($wrong_pass_counter > 3) {
                $cookie_name = "block_time";
                $cookie_value = "block";
                setcookie($cookie_name, $cookie_value, time() * 60, "/");
                if ($_COOKIE[$cookie_name]) {
                    $login_status = "blocked";
                } else {
                    $login_status = "active";
                    $wrong_pass_counter = 0;
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Login | Task</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5">
                <div class="card p-5">
                    <h2 class="text-center mb-4">User Login</h2>
                    <form action="login.php" method="post">
                        <label for="username">Username:</label><br>
                        <input type="text" name="username" class="form-control"><br>
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" class="form-control">
                        <label for="not_user" class=" mt-3">Don't Have a Account? <a href="registration.php">Register Now</a></label><br><br>
                        <input type="submit" value="Login" name="login" class="col-md-12 btn btn-success">
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>