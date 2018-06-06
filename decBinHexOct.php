<!--
    PHP code to print binary, hexadecimal and octal values of decimal numbers from 1 t0 100 in a table.
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
            width: 100px;
            height: 50px;
            border: black solid 2px;
            background-color: lightblue;
        }
        td{
            text-align: center;
            padding: 5px;
            width: 100px;
            height: 50px;
            border: black solid 2px;
            background-color: lighcyan;
        }
        h2{
            text-align: center;
        }

    </style>
    <body>
        <center>
        <h2>Conversion Table</h2>
        <br>
        <table>
            <tr>
                <th>Decimal</th>
                <th>Binary</th>
                <th>Hexadecimal</th>
                <th>Octal</th>
            </tr>
            <?php
                for($num = 0; $num <= 100; $num++){
                    echo "<tr>";
                        echo "<td>";
                            echo $num;
                        echo "</td>";
                        echo "<td>";
                            echo decbin($num);
                        echo "</td>";
                        echo "<td>";
                            echo dechex($num);
                        echo "</td>";
                        echo "<td>";
                            echo decoct($num);
                        echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </center>
    </body>
</html>
