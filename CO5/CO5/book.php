<?php
$conn=mysqli_connect("localhost","root","","Student");
if($conn)
{
    echo("successfully connected");
echo"<br>";
}
else{
    echo("error");
    echo"<br>";
}
if(isset($_POST['SUBMIT']))
{
    $AccessionNo=$_POST['AccessionNo'];
    $Title=$_POST['Title'];
    $Author=$_POST['Author'];
    $Edition=$_POST['Edition'];
    $Publisher=$_POST['Publisher'];
    $flag=0;
if($AccessionNo==""){
echo "please fill the Accession Number <br>";
$flag=1;
}
else{
    echo"Accession number is correct";
}
if( $Title=="" ){
echo "Please fill the Correct Title <br>";
$flag=1;
}
else{
    echo"Title is correct";
}
if($Author==""){
echo "please fill the Author name<br>";
$flag=1;
}
else{
    echo"Author Name is coorect";
}
if($Edition==""){
echo " please fill the Edition<br>";
$flag=1;
}
else{
echo "Edition is correct<br>";
}
if($Publisher=="")
{
    echo"please fill the Publisher name<br>";
}
else{
    echo"Publisher name is correct";
}
if($flag==0)
{
$query="INSERT INTO booktable(AccessionNo,Title,Author,Edition,Publisher)VALUES('{$AccessionNo}','{$Title}','{$Author}','{$Edition}','{$Publisher}')";
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
<body bgcolor="pink">
<center>
<form action="" method="POST">
    <h1>REGISTRATION FORM</h1>
    <table>
        <tr>
            <th>Accession No</th>
            <th>:</th>
            <td><input type="text" name="AccessionNo"></td>
        </tr>
        <tr>
            <th>Title</th>
            <th>:</th>
            <td><input type="text" name="Title"></td>
        </tr>
        <tr>
            <th>Author</th>
            <th>:</th>
            <td><input type="TEXT" name="Author"></td>
        </tr>
        <tr>
            <th>Edition</th>
            <th>:</th>
            <td><input type="text" name="Edition"></td>
        </tr>
        <tr>
            <th>Publisher</th>
            <th>:</th>
            <td><input type="text" name="Publisher"></td>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <td><input type="submit" name="SUBMIT" value="SUBMIT"></td>
        </tr>
    </table>
    
</form>
<form action="" method="POST">
    <h1>SEARCH BOOK</h1>
Enter Title:<input type="text" name="Title"><br><br>
<input type="submit" name="SEARCH" value="SEARCH">
</form>
<?php
 if(isset($_POST['SEARCH']))
 {?>
<table border=1>
    <tr>
        <th>Accession No</th>
        <th>Title</th>
        <th>Author</th>
        <th>Edition</th>
        <th>Publisher</th>
    </tr> 
    <?php
   
        $Title=$_POST['Title'];
    $search="SELECT * FROM booktable WHERE Title='$Title'";
    $data=mysqli_query($conn,$search);
    $rows=mysqli_num_rows($data);
    if($rows>0)
    {
    while($res=mysqli_fetch_assoc($data))
    {?>
    <tr>
    <td>
        <?php echo $res['AccessionNo'];?>
    </td>
    <td>
        <?php echo $res['Title'];?>
    </td>
    <td>
        <?php echo $res['Author'];?>
    </td>
    <td>
        <?php echo $res['Edition'];?>
    </td>
    <td>
        <?php echo $res['Publisher'];?>
    </td>
    </tr>
    
    <?php
    }
    }
    else{
        echo"<tr><td>NO DATA FOUND</td></tr>";
    }
    }
    ?>   
</center> 
</body>
</html>