<html>
    <head>
        <title>Complete Calendar</title>
    </head>
    <style>
        #box_td{
            padding: 5px;
            height: 190px;
            width: 310px;
            background-color: PowderBlue;
        }

        #cal_td{
            text-align: center;
            padding: 1px;
            width: 35px;
            height: 25px;
            border: black solid 2px;
        }

        #div_header{
            height: 125px;
            width: auto;
            text-align: center;
            font-family: Lucida Console;
            font-size: 40;
            font-weight: 775;
            background-color: LightBlue;
        }

        #div_calendar{
            height: auto;
            width: auto;
            background-color: LightCyan;
        }
    </style>
    <body>

        <?php
            function createCalendar($ctr){
                $month_array = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');

                $year = date("Y");
                $month = date("n",strtotime("$month_array[$ctr]"));
                $curr_month = date("n");
                $start_day = date("w",strtotime("1 $month_array[$ctr] $year"));
                $numOfDays = date("t",strtotime($month_array[$ctr], $year));

                $month_array = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');

                $day = 1;

                echo "<table>";
                    echo "<tr>";
                        echo "<th colspan = \"7\">";
                            echo $month_array[$ctr];
                        echo "</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td id = \"cal_td\"><b>Sun</b></td>";
                        echo "<td id = \"cal_td\"><b>Mon</b></td>";
                        echo "<td id = \"cal_td\"><b>Tue</b></td>";
                        echo "<td id = \"cal_td\"><b>Wed</b></td>";
                        echo "<td id = \"cal_td\"><b>Thu</b></td>";
                        echo "<td id = \"cal_td\"><b>Fri</b></td>";
                        echo "<td id = \"cal_td\"><b>Sat</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                        for($row = 0; $row < 7; $row++){
                            $bg = "Khaki";
                            if($month == $curr_month && $day == date("j") && $row >= $start_day){
                                $bg = "Lavender";
                            }
                            echo "<td bgcolor = \"$bg\" id = \"cal_td\">";
                                if($row >= $start_day){
                                    echo $day;
                                    $day++;
                                }
                            echo "</td>";
                        }
                    echo "</tr>";
                    for($row = 0; $row < 5; $row++){
                        echo "<tr>";
                        for($col = 0; $col < 7; $col++){
                            $bg = "Khaki";
                            if($month == $curr_month && $day == date("j")){
                                $bg = "Lavender";
                            }
                            echo "<td bgcolor = \"$bg\" id = \"cal_td\">";
                                if($day <= $numOfDays){
                                    echo $day;
                                    $day++;
                                }
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                echo "</table>";
            }
        ?>

        <center>
        <div id = "div_header">
            <br>
            Calender <?php echo date("Y"); ?>
        </div>
        <div id = "div_calendar">
            <table>
                <?php
                    $ctr = 0;

                    for($row = 0; $row < 3; $row++){
                        echo "<tr>";
                        for($col = 0; $col < 4; $col++){
                            echo "<td id = \"box_td\">";
                                createCalendar($ctr);
                            echo "</td>";
                            $ctr++;
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
        </center>
    </body>
</html>
