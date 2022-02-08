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
        </style>
    </head>
    <body>
        <?php
            $names=array("Dhanya","Arathy","Kanaga","Sreelakshmi S nair","Shidhu","Sradha","Archana","Akhila","Sreelakshmi N C","Aparna");
            echo "<center><h1>Student Names</h1></center><br>";
            echo "<center><h3>";
            print_r($names);
            echo "</h3></center><br>";
            echo "<center><h1>Student Names in Ascending order</h1></center><br>";
            echo "<center><h3>";
            asort($names);
            print_r($names);
            echo "</h3></center><br>";
            echo "<center><h1>Student Names in Descending order</h1></center><br>";
            echo "<center><h3>";
            arsort($names);
            print_r($names);
            echo "</h3></center><br>";
        ?>
    </body>
</html>