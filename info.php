<?php
    $con=mysqli_connect("localhost","root","");
    if($con){
        $db=mysqli_select_db($con,'database4');
        if(!$db)
        {
            echo"error in db selection";
        }
    }
    else
    {	
        echo "no connection found";
    }
    if(isset($_POST['register']))
    {
        $schno = $_POST['schno'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $department = $_POST["department"];
        $course = $_POST["course"];
        $semester = $_POST["semester"];
        $pass = md5($password);
        $query="insert into users (scholar_no,email_id,password,name,department,course,semester) values('$schno','$email','$pass','$name','$department','$course','$semester')";
        $x=mysqli_query($con,$query);
        if(!$x)
        {
            echo "<h1>Error in Adding.<h1>";
        }
        else
        {
            echo "<h1 style = \" color: rgb(44, 100, 185);\">Student Registered Successfully!!!</h1><hr>";
            if(!isset($_SESSION['active']))
            {
                $_SESSION['active'] = "YES";
                $_SESSION['schno'] = $schno;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['department'] = $department;
                $_SESSION['course'] = $course;
                $_SESSION['semester'] = $semester;
            }
            echo "<h3>Hello, {$_SESSION['name']}!!!</h3>";
            echo "<a href = \"login.php\">Logout</a>";
        }
    }
    else if(isset($_POST['studentLogin']))
    {
        $pass = md5($_POST['password']);
        $x=mysqli_query($con,"select * from users where email_id = '{$_POST['email']}' and password = '{$pass}' ");
        if(!$x)
        {
            echo "<h1>Wrong Username or Password</h1>";
            echo "<a href = \"login.php\">Go back to Login Page</a>";
        }
        else
        {
            $x1=mysqli_fetch_assoc($x);
            if(mysqli_num_rows($x)==1)
            {
                if(!isset($_SESSION['active']))
                {
                    $_SESSION['active'] = "YES";
                    $_SESSION['loginType'] = "student";
                    $_SESSION['schno'] = $x1['scholar_no'];
                    $_SESSION['email'] = $x1['email_id'];
                    $_SESSION['name'] = $x1['name'];
                    $_SESSION['department'] = $x1['department'];
                    $_SESSION['course'] = $x1['course'];
                    $_SESSION['semester'] = $x1['semester'];
                }
                echo "<h3>Hello, {$_SESSION['name']}!!!</h3>";
            }
            else
            {
                    echo "<p>Something went wrong!!!</p>";
            }
            echo '<script>
                    alert("User logged in successfully!!!");
                    window.location = "index.php";
                </script>';
        }
    }
    else if(isset($_POST['facultyLogin']))
    {
        $pass = md5($_POST['password']);
        $x=mysqli_query($con,"select * from users where email_id = '{$_POST['email']}' and password = '{$pass}' ");
        if(!$x)
        {
            echo "<h1>Wrong Username or Password</h1>";
            echo "<a href = \"login.php\">Go back to Login Page</a>";
        }
        else
        {
            $x1=mysqli_fetch_assoc($x);
            if(mysqli_num_rows($x)==1)
            {
                if(!isset($_SESSION['active']))
                {
                    $_SESSION['active'] = "YES";
                    $_SESSION['loginType'] = "faculty";
                    $_SESSION['schno'] = $x1['scholar_no'];
                    $_SESSION['email'] = $x1['email_id'];
                    $_SESSION['name'] = $x1['name'];
                    $_SESSION['department'] = $x1['department'];
                    $_SESSION['course'] = $x1['course'];
                    $_SESSION['semester'] = $x1['semester'];
                }
                echo "<h3>Hello, {$_SESSION['name']}!!!</h3>";
            }
            else
            {
                    echo "<p>Something went wrong!!!</p>";
            }
            echo '<script>
                    alert("User logged in successfully!!!");
                    window.location = "index.php";
                </script>';
        }
    }
?>