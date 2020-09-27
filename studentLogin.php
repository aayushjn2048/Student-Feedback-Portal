<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card {
            max-width: 400px;
            margin-top: 200px;
            margin-left: 372px;
            display: block;
            align-content: center;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            padding: 20px 30px 30px 30px;
        }
        #login {
            background-color: rgb(44, 100, 185);
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        if(isset($_SESSION['active']))
        {
            if(isset($_SESSION['active'])) {unset($_SESSION['active']);}
            if(isset($_SESSION['loginType'])) {unset($_SESSION['loginType']);}
            if(isset($_SESSION['schno'])) {unset($_SESSION['schno']);}
            if(isset($_SESSION['email'])) {unset($_SESSION['email']);}
            if(isset($_SESSION['name'])) {unset($_SESSION['name']);}
            if(isset($_SESSION['department'])) {unset($_SESSION['department']);}
            if(isset($_SESSION['course'])) {unset($_SESSION['course']);}
            if(isset($_SESSION['semester'])) {unset($_SESSION['semester']);}
        }
    ?>
    <div class = "container">
        <div class="card">
            <h1 style = "color: rgb(44, 100, 185);text-align: center;margin-bottom: 30px;">Login Portal</h1>
            <form action = "info.php" method = "post">
                <div class="form-group">
                    <label for="email">Email Id:</label>
                    <input type="email" class="form-control" id="email" name = "email" placeholder="Your Email Id" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name = "password" placeholder="Your Password" required>
                </div>
                <div class="form-group">
                    <input type="Submit" class="form-control" id="login" name = "studentLogin" value = "Login">
                </div>
            </form>
          </div>
    </div>
</body>
</html>