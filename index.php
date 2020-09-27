<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td {
            border-width: 3px;
            border-style:ridge;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th colspan = "7" style = "text-align: center;">STUDENT FEEDBACK FORM(2019-2020)</th>
        <form action = "myData.php" method = "post" id = "feedbackForm">
            <tr>
                <td>
                    Department  <select name="department">
                                    <option value="">Select Department</option>
                                    <option value="Computer Department">Computer Department</option>
                                    <option value="Mechanical Department">Mechanical Department</option>
                                    <option value="Electronics Department">Electronics Department</option>
                                    <option value="Electrical Department">Electrical Department</option>
                                    <option value="Civil Department">Civil Department</option>
                                    <option value="Chemical Department">Chemical Department</option>
                                </select>
                </td>
                <td>
                    Course      <select name="course">
                                    <option value="">Select Course</option>
                                    <option value="BTech">BTech</option>
                                    <option value="MTech">MTech</option>
                                    <option value="BArch">BArch</option>
                                    <option value="BPlan">BPlan</option>
                                    <option value="PhD">PhD</option>
                                </select>
                </td>
                <td colspan = "5">
                    Semester    <select name="semester">
                                    <option value="">Select Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                </td>
            </tr>
            <tr>
                <td>
                    Subject Name    <select name="subject">
                                        <option value="">Select Subject</option>
                                        <option value="Computer Architecture">Computer Architecture</option>
                                        <option value="Software Engineering">Software Engineering</option>
                                        <option value="DataBase Management System">DataBase Management System</option>
                                    </select>
                </td>
                <td>
                    Faculty         <select name="faculty">
                                        <option value="">Select Faculty</option>
                                        <option value="Prof JTC">Prof JTC</option>
                                        <option value="Prof Gagan">Prof Gagan</option>
                                        <option value="Prof Shweta Jain">Prof Shweta Jain</option>
                                        <option value="Prof Yatendra Sahu">Prof Yatendra Sahu</option>
                                    </select>
                </td>
            </tr>
            <tr><td style = "border:0px;" colspan = "3">
                <table style = "border:0px;" width = "100%">
                    <tr>
                        <td>Sr. No.</td>
                        <td>Parameter</td>
                        <td>5</td>
                        <td>4</td>
                        <td>3</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Ability to explain the concepts and principle of subject
                        </td>
                        <td><input type="radio" id="r15" name="q1" value="5"></td>
                        <td><input type="radio" id="r14" name="q1" value="4"></td>
                        <td><input type="radio" id="r13" name="q1" value="3"></td>
                        <td><input type="radio" id="r12" name="q1" value="2"></td>
                        <td><input type="radio" id="r11" name="q1" value="1"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Knowledge expertise and confidence of teacher in teaching
                        </td>
                        <td><input type="radio" id="r25" name="q2" value="5"></td>
                        <td><input type="radio" id="r24" name="q2" value="4"></td>
                        <td><input type="radio" id="r23" name="q2" value="3"></td>
                        <td><input type="radio" id="r22" name="q2" value="2"></td>
                        <td><input type="radio" id="r21" name="q2" value="1"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Ability to clear doubt in the classroom and outside
                        </td>
                        <td><input type="radio" id="r35" name="q3" value="5"></td>
                        <td><input type="radio" id="r34" name="q3" value="4"></td>
                        <td><input type="radio" id="r33" name="q3" value="3"></td>
                        <td><input type="radio" id="r32" name="q3" value="2"></td>
                        <td><input type="radio" id="r31" name="q3" value="1"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Ability to conclude concepts with example
                        </td>
                        <td><input type="radio" id="r45" name="q4" value="5"></td>
                        <td><input type="radio" id="r44" name="q4" value="4"></td>
                        <td><input type="radio" id="r43" name="q4" value="3"></td>
                        <td><input type="radio" id="r42" name="q4" value="2"></td>
                        <td><input type="radio" id="r41" name="q4" value="1"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            Communication skills and clarity
                        </td>
                        <td><input type="radio" id="r55" name="q5" value="5"></td>
                        <td><input type="radio" id="r54" name="q5" value="4"></td>
                        <td><input type="radio" id="r53" name="q5" value="3"></td>
                        <td><input type="radio" id="r52" name="q5" value="3"></td>
                        <td><input type="radio" id="r51" name="q5" value="1"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            Punctuality and regularly in class
                        </td>
                        <td><input type="radio" id="r65" name="q6" value="5"></td>
                        <td><input type="radio" id="r64" name="q6" value="4"></td>
                        <td><input type="radio" id="r63" name="q6" value="3"></td>
                        <td><input type="radio" id="r62" name="q6" value="2"></td>
                        <td><input type="radio" id="r61" name="q6" value="1"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>
                            Interaction and discussion with students
                        </td>
                        <td><input type="radio" id="r75" name="q7" value="5"></td>
                        <td><input type="radio" id="r74" name="q7" value="4"></td>
                        <td><input type="radio" id="r73" name="q7" value="3"></td>
                        <td><input type="radio" id="r72" name="q7" value="2"></td>
                        <td><input type="radio" id="r71" name="q7" value="1"></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>
                            Attitude towards students
                        </td>
                        <td><input type="radio" id="r85" name="q8" value="5"></td>
                        <td><input type="radio" id="r84" name="q8" value="4"></td>
                        <td><input type="radio" id="r83" name="q8" value="3"></td>
                        <td><input type="radio" id="r82" name="q8" value="2"></td>
                        <td><input type="radio" id="r81" name="q8" value="1"></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>
                            Monitoring students and creating interest on subjects
                        </td>
                        <td><input type="radio" id="r95" name="q9" value="5"></td>
                        <td><input type="radio" id="r94" name="q9" value="4"></td>
                        <td><input type="radio" id="r93" name="q9" value="3"></td>
                        <td><input type="radio" id="r92" name="q9" value="2"></td>
                        <td><input type="radio" id="r91" name="q9" value="1"></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Tunely evaluation of internal assessment
                        </td>
                        <td><input type="radio" id="r05" name="q0" value="5"></td>
                        <td><input type="radio" id="r04" name="q0" value="4"></td>
                        <td><input type="radio" id="r03" name="q0" value="3"></td>
                        <td><input type="radio" id="r02" name="q0" value="2"></td>
                        <td><input type="radio" id="r01" name="q0" value="1"></td>
                    </tr>
                </table>
            </tr></td>
            <tr rowspan = "4">
                <td colspan = "3">
                    <p style = "margin: 0%;padding: 0%;text-align: center;">Review and Comments for overall Improvement</p>
                    <textarea style = "width: 90%;height:50px;margin-left: 36px;margin-bottom: 10px;" name="remarks" form="feedbackForm"></textarea>
                </td>
            </tr>
            <tr><td colspan = "3" style = "text-align: center;"><input style = "margin: 5px;" type = "submit" name = "submit" value = "Submit"></td></tr>
        </form>
    </table>
</body>
</html>