<html>
    <head>
        <title>Calender</title>
        <style>
            td,th{
                text-align: center;
                padding: 5px;
                width: 80px;
                height: 50px;
                border: black solid 2px;
            }

            h2{
                text-align: center;
                width: 700px;
                height: 30px;
                background-color: powderblue;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Calender</h1>
            <br><br>
            <?php
                $month = date("M");
                $year = date("Y");
                echo"<h2>$month $year</h2>";

                $day = 1;
                $start_day = date("w",strtotime("1 $month $year"));
                $numOfDays = date("t");
            ?>

            <table>
                <tr>
                    <th><b>Sun</b></th>
                    <th><b>Mon</b></th>
                    <th><b>Tue</b></th>
                    <th><b>Wed</b></th>
                    <th><b>Thu</b></th>
                    <th><b>Fri</b></th>
                    <th><b>Sat</b></th>
                </tr>
            <?php
                echo"<tr>";
                for($i = 0; $i < 7; $i++){
                    $bg = "Khaki";
                    if($day == $i and $day == date("j")){
                        $bg = "Lavender";
                    }
                    echo"<td bgcolor = \"$bg\">";
                        if($i >= $start_day){
                            echo $day;
                            $day++;
                        }
                    echo"</td>";
                }
                echo"</tr>";
                for($row = 0; $row < 4; $row++){
                    echo "<tr>";
                    for($col = 0; $col < 7; $col++){
                        $bg = "Khaki";
                        if($day == date("j")){
                            $bg = "Lavender";
                        }
                        echo "<td bgcolor = \"$bg\">";
                        if($day <= $numOfDays){
                            echo $day;
                            $day++;
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            ?>
            </table>
        </center>
    </body>
</html>
