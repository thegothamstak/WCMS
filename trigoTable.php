<!--
    PHP code to print sin, cos and tan values of numbers from 0 to 300 in a table.
    Author : Shripad Tak
    Date : 6th June 2018
--->
<html>
    <head>
        <title>Trigonometric Table</title>
    </head>
    <style>
        th{
            text-align: center;
            padding: 5px;
            width: 250px;
            height: 50px;
            border: black solid 2px;
            background-color: lightblue;
        }
        td{
            text-align: center;
            padding: 5px;
            width: 250px;
            height: 50px;
            border: black solid 2px;
            background-color: khaki;
        }

        #num{
            text-align: center;
            padding: 5px;
            width: 250px;
            height: 50px;
            border: black solid 2px;
            background-color: lightcyan;
        }
    </style>
    <body>
        <center>
        <table>
            <tr>
                <th>Radian</th>
                <th>Sin</th>
                <th>Cos</th>
                <th>Tan</th>
            </tr>
            <?php
                for($num = 0; $num <= 300; $num += 5){
                    echo "<tr>";
                        echo "<td id = \"num\">";
                            echo $num;
                        echo "</td>";
                        echo "<td>";
                            echo sin(deg2rad($num));
                        echo "</td>";
                        echo "<td>";
                            echo cos(deg2rad($num));
                        echo "</td>";
                        echo "<td>";
                            echo tan(deg2rad($num));
                        echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </center>
    </body>
</html>
