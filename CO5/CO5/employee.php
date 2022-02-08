<?php
$conn=mysqli_connect("localhost","root","","employee");
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
    $emp_name=$_POST['emp_name'];
    $job_name=$_POST['job_name'];
    $manager_id=$_POST['manager_id'];
    $salary=$_POST['salary'];    
$flag=0;




if($emp_name==""){
echo "please fill the employee name <br>";
$flag=1;
}
if( $job_name==""){
echo "please fill the job name <br>";
$flag=1;
}
if($manager_id==""){
echo "please fill the manager id<br>";
$flag=1;
}
if($salary==""){
echo " please fill the salary<br>";
$flag=1;
}
if($flag==0)
{
$query="INSERT INTO employe(emp_name,job_name,manager_id,salary)VALUES('{$emp_name}','{$job_name}','{$manager_id}','{$salary}')";
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
                background-color:bisque;
            }
            h1{
                color: black;
                text-align: center;
                font-size: 3em;
            }
            h3{
                color: black;
                text-align: center;
                font-size: 1.8em;
                margin-left: 5%;
            }
        </style>
    </head>
<body>
<center>
<form action="" method="POST">
    <h1>Employee Details</h1>
    <table>
        <tr>
            <th>Employee name</th>
            <th>:</th>
            <td><input type="text" name="emp_name"></td>
        </tr>
        <tr>
            <th>Job name</th>
            <th>:</th>
            <td><input type="text" name="job_name"></td>
        </tr>
        <tr>
            <th>Manager id</th>
            <th>:</th>
            <td><input type="number" name="manager_id"></td>
        </tr>
        <tr>
            <th>Salary</th>
            <th>:</th>
            <td><input type="number" name="salary"></td>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <td><input type="submit" name="submit"></td>
        </tr>
    
    </table>
</form>

 <h3>Employees with salary geater than 35000</h3>
<table border=1>
    <tr>
        <th>Employee name</th>
        <th>Salary</th>
    </tr> 
    <?php
    $search1="SELECT emp_name,salary FROM employe WHERE salary>'35000'";
    $data1=mysqli_query($conn,$search1);
    
    
    while($res=mysqli_fetch_assoc($data1))
    {?>
    <tr>
    <td>
        <?php echo $res['emp_name'];?>
    </td>
    <td>
        <?php echo $res['salary'];?>
    </td>
    </tr>
    
    <?php
    }
    ?>   
</center> 
</body>
</html>