<html>
    <head>
        <title>Registration form</title>
        <style>
            body{
                background-color:wheat;
            }
            h1{
                color: cadetblue;
                text-align: center;
                font-size: 3em;
            }
            table{
                text-align: center;
                width: 60%;
                border: 2;
                border-color: black;
                margin-left: 35%;
                margin-right: 30%;
                
            }
            th{
                text-align: left;
                margin-left: 50%;

            }
            td{
                text-align: left;
            }
            input,textarea{
                background-color: whitesmoke;
                width: auto;
            }
            select{
                background-color: whitesmoke;
            }
        </style>
    </head>
    <body>
        <h1>Registration Form</h1><br><br>
        <form name="form" method="POST">
        <table>
            <tr>
                <th style="width: 20%;">Patient ID</th>
                <th style="width: 2%;">:</th>
                <td><input type="number" name="pid"  width="20cm" maxlength="4" autofocus style="width: 6.3cm;"></td>
            </tr>
            <tr>
                <th style="width: 20%;">Patient Name</th>
                <th style="width: 2%;">:</th>
                <td><input type="text" name="pname" width="20cm" maxlength="15" autofocus style="width: 6.3cm;"></td>
            </tr>
            <tr>
                <th>Age</th>
                <th>:</th>
                <td><input type="number" name="age" width="20cm" maxlength="2" style="width: 6.3cm;"></td>
            </tr>
            <tr>
                <th>Address</th>
                <th>:</th>
                <td><textarea name="address" cols="30" rows="10" ></textarea></td>
            </tr>
            <tr>
                <th>Mobile</th>
                <th>:</th>
                <td><input type="number" name="mobile" minlength="10" maxlength="10" style="width: 6.3cm;" onchange="phoneno()"></td>
            </tr> 
            <tr>
                <th>Date of Admission</th>
                <th>:</th>
                <td><input type="date" name="date" width="20cm"  style="width: 6.3cm;"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <th>:</th>
                <td>
                    <select name="gender" required style="width: 6.3cm;">
                        <option selected="">(Please select Gender)</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="trans">Transgender</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <th>:</th>
                <td><input type="email" name="email" style="width: 6.3cm;"></td>
            </tr>
            <tr>
                <th>User Name</th>
                <th>:</th>
                <td><input type="text" name="user" style="width: 6.3cm;"></td>
            </tr>
            <tr>
                <th>Password</th>
                <th>:</th>
                <td><input type="password" name="pass" minlength="8" maxlength="15" style="width: 6.3cm;"></td>
            </tr> 
            <tr>
                <th></th>
                <th></th>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $pid=$_POST['pid'];
        $pname=$_POST['pname'];
        $age=$_POST['age'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $date=$_POST['date'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $upper=preg_match('@A-Z@',$pass);
        $lower=preg_match('@a-z@',$pass);
        $number=preg_match('@0-9@',$pass);
        $number1=preg_match('@0-9@',$mobile);

        if($pid=="")
        {
            echo "<center>";
            echo "Enter patient id";
            echo "<br>";
            echo "</center>";
        }
        if($pname=="")
        {
            echo "<center>";
            echo "Enter patient name";
            echo "<br>";
            echo "</center>";
        }
        if($age=="")
        {
            echo "<center>";
            echo "Enter age";
            echo "<br>";
            echo "</center>";
        }
        if($address=="")
        {
            echo "<center>";
            echo "Enter adress";
            echo "<br>";
            echo "</center>";
        }
        if($mobile=="" && strlen($mobile)<10)
        {
            echo "<center>";
            echo "Please enter correct mobile number";
            echo "<br>";
            echo "</center>";
        }
        if($date=="")
        {
            echo "<center>";
            echo "Enter date of admission";
            echo "<br>";
            echo "</center>";
        }
        if($email=="")
        {
            echo "<center>";
            echo "Enter email";
            echo "<br>";
            echo "</center>";
        }
        if($user=="")
        {
            echo "<center>";
            echo "Enter user name";
            echo "<br>";
            echo "</center>";
        }
        if($pass=="" && strlen($pass)<8)
        {
            echo "<center>";
            echo "password should contain atleast 8 characters";
            echo "<br>";
            echo "</center>";
        }
        else if(!$upper || !$lower || !$number)
        {
            echo "<center>";
            echo "password should include atleast one upper case letter, one lower case letter, one number and one special character";
            echo "<br>";
            echo "</center>";
        }
        else
        {
            echo "<center>";
            echo "Strong ";
            echo "<br>";
            echo "</center>";
        }
    }
?>