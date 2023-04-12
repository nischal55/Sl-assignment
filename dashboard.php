<?php
session_start();
if (isset($_SESSION['username'])) {
} else {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>DashBoard | Task</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card p-5">
                    <h3 class="text-center">Dashboard</h3><br>
                    <h4></h4>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>