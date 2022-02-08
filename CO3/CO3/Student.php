<?php
$conn=mysqli_connect("localhost","root","","student");
if($conn)
{
    echo("successfully connected");
echo"<br>";
}
else{
    echo("error");
    echo"<br>";
}
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $emailid=$_POST['emailid'];
    $phonenumber=$_POST['phonenumber'];
    $uppercase=preg_match('@[A-Z]@', $password);
    $lowercase=preg_match('@[a-z]@', $password);
    $number=preg_match('@[0-9]@', $password);
    $number1=preg_match('@[0-9]@', $phonenumber);
    
$flag=0;




if($username==""){
echo "please fill the username <br>";
$flag=1;
}
if( $password=="" && strlen($password) < 8){
echo "Password should be at least 8 characters in length <br>";
$flag=1;
}
else if( !$uppercase || !$lowercase || !$number ) {
echo "password should include at least one upper case letter, one number, and one special character.<br>";
$flag=1;
}
else{
echo "Strong password.<br>";
}
if($emailid==""){
echo "please fill the email id<br>";
$flag=1;
}
if($phonenumber==""){
echo " please fill the phone number<br>";
$flag=1;
}
else if(strlen($phonenumber)<10){
echo "please fill correct phone number <br> "; 
$flag=1;
}
else{
echo "phone number is correct<br>";
}
if($flag==0)
{
$query="INSERT INTO stud(username,password,phonenumber,emailid)VALUES('{$username}','{$password}','{$phonenumber}','{$emailid}')";
if(mysqli_query($conn,$query))
{
    echo("successfully inserted");
    echo "<br>";
}
else{
    echo("insertion failed");
    echo"<br>";
}
}

}
?>
<html>
    <head>
    <style>
            body{
                background-color:wheat;
            }
            h1{
                color: cadetblue;
                text-align: center;
                font-size: 3em;
            }
            h3{
                color: black;
                text-align: center;
                font-size: 1.8em;
            }
            table{
                text-align: center;
                width: 30%;
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
                text-align: center;
                font: 1em sans-serif;
            }
        </style>
    </head>
<body>
<center>
<form action="" method="POST">
    <h1>REGISTRATION FORM</h1>
    <table>
        <tr>
            <th>Username</th>
            <th>:</th>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <th>Password</th>
            <th>:</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th>Phone number</th>
            <th>:</th>
            <td><input type="number" name="phonenumber"></td>
        </tr>
        <tr>
            <th>Emailid</th>
            <th>:</th>
            <td><input type="text" name="emailid"></td>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <td><input type="submit" name="submit"></td>
        </tr>
    
    </table>
</form>
<table border=1>
    <tr>
        <th>username</th>
        <th>password</th>
        <th>phone number</th>
        <th>email id</th>
    </tr> 
    <?php
    $search="SELECT * FROM stud";
    $data=mysqli_query($conn,$search);
    
    
    while($res=mysqli_fetch_assoc($data))
    {?>
    <tr>
    <td>
        <?php echo $res['username'];?>
    </td>
    <td>
        <?php echo $res['password'];?>
    </td>
    <td>
        <?php echo $res['phonenumber'];?>
    </td>
    <td>
        <?php echo $res['emailid'];?>
    </td>
    </tr>
    
    <?php
    }
    ?>   
</center> 
</body>
</html>