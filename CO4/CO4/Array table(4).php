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
        <?php
            $names=array("Virat Kohli","Rohit Sharma","KL Rahul","Rishabh Pant","MS Dhoni","Hardik Pandya","Jasprit Bumrah","Ravindra jadeja","Mohammed Shami","Mayank Agarwal","Shardul Thakur","Jayant Yadav","Harshal Patel","Bhuvaneshwar Kumar","Yuzvendra Chahal","Dinesh Karthik","Kedar Jadhav","Kuldeep Yadav","Prasidh Krishna");
            echo "<center><h1>Indian Cricket Players</h1></center><br>";
            echo "<table border='1'><tr><th><h3>slno:<h3></th><th><h3>Player<h3></th></tr>";
            foreach($names as $n=>$p)
            {
            echo "<tr><td>$n</td><td>$p</td></tr>";
            }
            echo "</table>";
            /*print_r($names);
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
            echo "</h3></center><br>";*/
        ?>
    </body>
</html>