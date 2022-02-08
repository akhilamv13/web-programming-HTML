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
        <h1>Electricity Bill</h1><br><br>
        <form method="POST">
        <table>
            <tr>
                <th style="width: 20%;">Meter Number</th>
                <th style="width: 2%;">:</th>
                <td><input type="number" name="mnum" width="20cm" maxlength="15" autofocus style="width: 6.3cm;" placeholder="Meter number"></td>
            </tr>
            <tr>
                <th>Number of Units</th>
                <th>:</th>
                <td><input type="number" name="units" width="20cm"  style="width: 6.3cm;" placeholder="Units"></td>
            </tr>
            <tr>
                <th>Tariff</th>
                <th>:</th>
                <td>
                    <select name="tariff" id="country" required style="width: 6.3cm;">
                        <option selected="" value="Defualt">(Please select tariff)</option>
                        <option value="rural">Rural</option>
                        <option value="domestic">Domestic</option>
                        <option value="commercial">Commercial</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <td> <input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php
if (isset($_POST['submit'])) 
{
    $mnum=$_POST['mnum'];
    $units=$_POST['units'];
    $tariff=$_POST['tariff'];
    if($tariff=="rural")
    {
        if ($units>0 && $units<=50) {
            $e=20;
            $amount=(($units*.25)+$e);
        }
        else if ($units>50 && $units<=100) {
            $e=20;
            $amount=(($units*.50)+$e);
        }
        else if ($units>100 && $units<=200) {
            $e=20;
            $amount=(($units*.80)+$e);
        }
        else if ($units>200 && $units<=300) {
            $e=20;
            $amount=(($units*1.10)+$e);
        }
        else if ($units>300 && $units<=400) {
            $e=20;
            $amount=(($units*1.40)+$e);
        }
        else if ($units>400) {
            $e=20;
            $amount=(($units*1.80)+$e);
        }
    echo "<center>";
    echo "<b>Meter number:</b>".$mnum;
    echo "<br>";
    echo "<b>Number of Units consumed:</b>".$units;
    echo "<br>";
    echo "<b>Tariff:</b>".$tariff;
    echo "<br>";
    echo "<b>Amount:</b>".$amount;
    echo "</center>";
    }
    if($tariff=="domestic")
    {
        if ($units>0 && $units<=50) {
            $e=40;
            $amount=(($units*.35)+$e);
        }
        else if ($units>50 && $units<=100) {
            $e=40;
            $amount=(($units*.60)+$e);
        }
        else if ($units>100 && $units<=200) {
            $e=40;
            $amount=(($units*.90)+$e);
        }
        else if ($units>200 && $units<=300) {
            $e=40;
            $amount=(($units*1.20)+$e);
        }
        else if ($units>300 && $units<=400) {
            $e=40;
            $amount=(($units*1.50)+$e);
        }
        else if ($units>400) {
            $e=40;
            $amount=(($units*1.90)+$e);
        }
    echo "<center>";
    echo "<b>Meter number:</b>".$mnum;
    echo "<br>";
    echo "<b>Number of Units consumed:</b>".$units;
    echo "<br>";
    echo "<b>Tariff:</b>".$tariff;
    echo "<br>";
    echo "<b>Amount:</b>".$amount;
    echo "</center>";
    }
    if($tariff=="commercial")
    {
        if ($units>0 && $units<=50) {
            $e=50;
            $amount=(($units*.45)+$e);
        }
        else if ($units>50 && $units<=100) {
            $e=50;
            $amount=(($units*.70)+$e);
        }
        else if ($units>100 && $units<=200) {
            $e=50;
            $amount=(($units*1.00)+$e);
        }
        else if ($units>200 && $units<=300) {
            $e=50;
            $amount=(($units*1.30)+$e);
        }
        else if ($units>300 && $units<=400) {
            $e=50;
            $amount=(($units*1.60)+$e);
        }
        else if ($units>400) {
            $e=50;
            $amount=(($units*2.00)+$e);
        }
    echo "<center>";
    echo "<b>Meter number:</b>".$mnum;
    echo "<br>";
    echo "<b>Number of Units consumed:</b>".$units;
    echo "<br>";
    echo "<b>Tariff:</b>".$tariff;
    echo "<br>";
    echo "<b>Amount:</b>".$amount;
    echo "</center>";
    }
}
?>
