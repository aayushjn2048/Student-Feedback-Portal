<?php
    $con=mysqli_connect("localhost","root","");
    if($con){
        $db=mysqli_select_db($con,'database5');
        if(!$db)
        {
            echo"error in db selection";
        }
    }
    else
    {	
        echo "no connection found";
    }
    if(isset($_POST['submit']))
    {
        $department = $_POST["department"];
        $course = $_POST["course"];
        $semester = $_POST["semester"];
        $subject = $_POST["subject"];
        $faculty = $_POST["faculty"];
        $q1 = (int)$_POST["q1"];
        $q2 = (int)$_POST["q2"];
        $q3 = (int)$_POST["q3"];
        $q4 = (int)$_POST["q4"];
        $q5 = (int)$_POST["q5"];
        $q6 = (int)$_POST["q6"];
        $q7 = (int)$_POST["q7"];
        $q8 = (int)$_POST["q8"];
        $q9 = (int)$_POST["q9"];
        $q0 = (int)$_POST["q0"];
        $remarks = $_POST["remarks"];
        $avg = (float)($q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q0)/10;
        $query="insert into feedbacks (department,course,semester,subject,faculty,q1,q2,q3,q4,q5,q6,q7,q8,q9,q0,avg,remarks) values('$department','$course','$semester','$subject','$faculty','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q0','$avg','$remarks')";
        $x=mysqli_query($con,$query);
        if(!$x)
        {
            echo "<h1>Error in Adding.<h1>";
        }
        else
        {
            echo "<h3>Feedback submitted successfully!!!</h3><hr>";
            echo "  <style>
                        table,th,td {
                            border-width: 3px;
                            border-style:ridge;
                        } 
                        th,td {
                            margin: 10px;
                            padding: 5px;
                        }
                    </style>
                    <table>
                        <form action = \"myData.php\" method = \"post\">
                            <tr>
                                <td>
                                    Department  <select name=\"department\">
                                                    <option value=\"\">Select Department</option>
                                                    <option value=\"Computer Department\">Computer Department</option>
                                                    <option value=\"Mechanical Department\">Mechanical Department</option>
                                                    <option value=\"Electronics Department\">Electronics Department</option>
                                                    <option value=\"Electrical Department\">Electrical Department</option>
                                                    <option value=\"Civil Department\">Civil Department</option>
                                                    <option value=\"Chemical Department\">Chemical Department</option>
                                                </select>
                                </td>
                                <td>
                                    Course      <select name=\"course\">
                                                    <option value=\"\">Select Course</option>
                                                    <option value=\"BTech\">BTech</option>
                                                    <option value=\"MTech\">MTech</option>
                                                    <option value=\"BArch\">BArch</option>
                                                    <option value=\"BPlan\">BPlan</option>
                                                    <option value=\"PhD\">PhD</option>
                                                </select>
                                </td>
                                <td>
                                    Semester    <select name=\"semester\">
                                                    <option value=\"\">Select Semester</option>
                                                    <option value=\"1\">1</option>
                                                    <option value=\"2\">2</option>
                                                    <option value=\"3\">3</option>
                                                    <option value=\"4\">4</option>
                                                    <option value=\"5\">5</option>
                                                    <option value=\"6\">6</option>
                                                    <option value=\"7\">7</option>
                                                    <option value=\"8\">8</option>
                                                    <option value=\"9\">9</option>
                                                    <option value=\"10\">10</option>
                                                </select>
                                </td>
                                <td>
                                    Subject Name    <select name=\"subject\">
                                                        <option value=\"\">Select Subject</option>
                                                        <option value=\"Computer Architecture\">Computer Architecture</option>
                                                        <option value=\"Software Engineering\">Software Engineering</option>
                                                        <option value=\"DataBase Management System\">DataBase Management System</option>
                                                    </select>
                                </td>
                            </tr>
                            <tr><td colspan = \"4\" style = \"text-align: center;\"><input style = \"margin: 5px;\" type = \"submit\" name = \"facultylist\" value = \"Show List\"></td></tr>
                        </form>
                    </table>
            ";
            /*$query="select * from feedbacks where 1";
            $y=mysqli_query($con,$query);
            if(!$y)
            {
                echo "<h1>Error in Showing.<h1>";
            }
            else
            {
                echo "  <style>
                            table,th,td {
                                border-width: 3px;
                                border-style:ridge;
                            }
                            th,td {
                                padding: 5px;
                            }
                        </style>
                        <table>
                            <tr>
                                <th>Faculty</th>
                                <th>Department</th>
                                <th>Course</th>
                                <th>Semester</th>
                                <th>Subject</th>
                                <th>Rating</th>
                                <th>Remarks</th>
                            </tr>";
                while($i=mysqli_fetch_assoc($y))
                {
                    echo "  <tr>
                                <td>{$i['faculty']}</td>
                                <td>{$i['department']}</td>
                                <td>{$i['course']}</td>
                                <td>{$i['semester']}</td>
                                <td>{$i['subject']}</td>
                                <td>{$i['avg']}</td>
                                <td>{$i['remarks']}</td>
                            </tr>";
                }
                echo "</table>";
            } */
        }
    }
    else if(isset($_POST['facultylist']))
    {
        /*if(isset($_SESSION['active']))
        {
            if(isset($_SESSION['active'])) {unset($_SESSION['active']);}
            if(isset($_SESSION['department'])) {unset($_SESSION['department']);}
            if(isset($_SESSION['course'])) {unset($_SESSION['course']);}
            if(isset($_SESSION['semester'])) {unset($_SESSION['semester']);}
            if(isset($_SESSION['subject'])) {unset($_SESSION['subject']);}
        }*/
        $department = $_POST["department"];
        $course = $_POST["course"];
        $semester = $_POST["semester"];
        $subject = $_POST["subject"];
        $query1 = "SELECT DISTINCT faculty FROM feedbacks WHERE department='$department' AND course='$course' AND semester='$semester' AND subject ='$subject'";
        //$query2 = "SELECT rating FROM feedbacks WHERE department='$department' AND course='$course' AND semester='$semester' AND subject ='$subject'";
        $x1 = mysqli_query($con,$query1);
        /*if(!(isset($_SESSION['active'])))
        {
            $_SESSION['active'] = "YES";
            $_SESSION['department'] = $department;
            $_SESSION['course'] = $course;
            $_SESSION['semester'] = $semester;
            $_SESSION['subject'] = $subject;
        }
        $x2 = mysqli_query($con,$query2);
        $res1 = mysqli_fetch_assoc($x1);
        $res2 = mysqli_fetch_assoc($x2);*/
        if(!$x1)
        {
            echo "<h1>Something bullshit happened!!!</h1>";
        }
        else
        {
            echo "  
                    <style>
                        table,th,td {
                            border-width: 3px;
                            border-style:ridge;
                        } 
                        th,td {
                            padding: 5px;
                        }
                    </style>
                    <table style = \"margin-top: 20px;\">
                        <form action = \"myData.php\" method = \"get\">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Faculty Name</th>
                                <th>Total Feedbacks</th>
                                <th>Average</th>
                                <th>Action</th>
                            </tr>";
                $counter = 0;
                while($i = mysqli_fetch_assoc($x1))
                {
                    $counter = $counter + 1;
                    $query2 = "SELECT avg FROM feedbacks WHERE department='$department' AND course='$course' AND semester='$semester' AND subject ='$subject' AND faculty = '{$i['faculty']}'";
                    $x2 = mysqli_query($con,$query2);
                    $sum = 0.0;
                    $count = 0;
                    while($j = mysqli_fetch_assoc($x2))
                    {
                        $sum = $sum + 10*(float)$j['avg'];
                        $count = $count + 1;
                    }
                    if($count>0)
                    {
                        $sum = $sum/$count*2;
                    }
                    echo "  <tr>
                                <td>{$counter}</td>
                                <td>{$i['faculty']}</td>
                                <td>{$count}</td>
                                <td>{$sum}%</td>
                                <td><a href=\"myData.php?faculty={$i['faculty']}&totalFeedback={$count}&myRating={$sum}&department={$department}&course={$course}&semester={$semester}&subject={$subject}\">Click Here for more details</a></td>
                            </tr>";
                }
            echo "      </form>
                    </table>";
        }
    }
    else if(isset($_GET['faculty'])/*&&
            isset($_GET['totalFeedback'])&&
            isset($_GET['myRating'])&&
            isset($_GET['department'])&&
            isset($_GET['course'])&&
            isset($_GET['semester'])&&
            isset($_GET['subject'])*/)
    {
        $myfaculty = $_GET['faculty'];
        $mytotalFeedback = (int)$_GET['totalFeedback'];
        $myRating = $_GET['myRating'];
        $mydepartment = $_GET["department"];
        $mycourse = $_GET["course"];
        $mysemester = $_GET["semester"];
        $mysubject = $_GET["subject"];
        $query3 = "SELECT * FROM feedbacks WHERE department='$mydepartment' AND course='$mycourse' AND semester='$mysemester' AND subject ='$mysubject' AND faculty = '$myfaculty'";
        $x3 = mysqli_query($con,$query3);
        echo "  <style>
                        table,th,td {
                            border-width: 3px;
                            border-style:ridge;
                        }
                        th,td {
                            padding: 5px;
                        }
                    </style>
                    <table style = \"width: 1000px;\">
                        <tr>
                            <td>Faculty Name: $myfaculty</td>
                            <td>Department Name: $mydepartment</td>
                            <td>Course Name: $mycourse</td>
                        </tr>
                        <tr>
                            <td>Subject: $mysubject</td>
                            <td>Semester: $mysemester</td>
                            <td>Total Feedback: $mytotalFeedback</td>
                        </tr>
                    </table>
                    <table style = \"max-width: 1000px;\">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Que. (a) (out of 5)</th>
                            <th>Que. (b) (out of 5)</th>
                            <th>Que. (c) (out of 5)</th>
                            <th>Que. (d) (out of 5)</th>
                            <th>Que. (e) (out of 5)</th>
                            <th>Que. (f) (out of 5)</th>
                            <th>Que. (g) (out of 5)</th>
                            <th>Que. (h) (out of 5)</th>
                            <th>Que. (i) (out of 5)</th>
                            <th>Que. (j) (out of 5)</th>
                            <th>Total Score (out of 50)</th>
                        </tr>";
            $count1 = 0;
            while($i=mysqli_fetch_assoc($x3))
            {
                $count1 = $count1 + 1;
                $val = $i['avg']*10;
                echo "  <tr>
                            <td>{$count1}</td>
                            <td>{$i['q1']}</td>
                            <td>{$i['q2']}</td>
                            <td>{$i['q3']}</td>
                            <td>{$i['q4']}</td>
                            <td>{$i['q5']}</td>
                            <td>{$i['q6']}</td>
                            <td>{$i['q7']}</td>
                            <td>{$i['q8']}</td>
                            <td>{$i['q9']}</td>
                            <td>{$i['q0']}</td>
                            <td>{$val}</td>
                        </tr>";
            }
            echo "      <tr>
                            <td colspan = \"12\">Average Feedback Score: {$myRating}%</td>
                        </tr>
                    </table>";
    }
    else
    {
        $query="select * from feedbacks where 1";
        $y=mysqli_query($con,$query);
        if(!$y)
        {
            echo "<h1>Error in Showing.<h1>";
        }
        else
        {
            echo "  <style>
                        table,th,td {
                            border-width: 3px;
                            border-style:ridge;
                        }
                        th,td {
                            padding: 5px;
                        }
                    </style>
                    <table>
                        <tr>
                            <th>Faculty</th>
                            <th>Department</th>
                            <th>Course</th>
                            <th>Semester</th>
                            <th>Subject</th>
                            <th>Rating</th>
                            <th>Remarks</th>
                        </tr>";
            while($i=mysqli_fetch_assoc($y))
            {
                echo "  <tr>
                            <td>{$i['faculty']}</td>
                            <td>{$i['department']}</td>
                            <td>{$i['course']}</td>
                            <td>{$i['semester']}</td>
                            <td>{$i['subject']}</td>
                            <td>{$i['avg']}</td>
                            <td>{$i['remarks']}</td>
                        </tr>";
            }
            echo "</table>";
        } 
    }
?>


<!--"select * from feedbacks where department = '{$department}' and course = '{$course}' and semester = '{$semester}' and subject = '{$subject}' "-->