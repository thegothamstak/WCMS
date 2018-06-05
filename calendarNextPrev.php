<!--
    PHP code to display the calendar of current month with options to traverse to previous and next months.
    Author : Shripad Tak
    Date : 5th June 2018
--->
<html>
    <head>
        <title>Calendar</title>
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

            h3{
                text-align: center;
                width: 500px;
                height: 30px;
                background-color: powderblue;
            }

        </style>
    </head>
    <body>
        <center>
            <h1>Calender</h1>
            <br>
            <?php
                $month = date("n");
                $year = date("Y");
                if(array_key_exists('month',$_REQUEST)){
                    $month = $_REQUEST['month'];
                    $year = $_REQUEST['year'];
                }

                $month_array = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');

                $mon = $month_array[$month-1];
                $curr_mon = date("M");

                echo"<h2>$mon $year</h2>";

                $day = 1;
                $start_day = date("w",strtotime("1 $mon $year"));
                $numOfDays = date("t",strtotime("1 $mon $year"));

                if($month > 1 && $month < 12){
                    $pm = $month - 1;
                    $py = $year;
                    $nm = $month + 1;
                    $ny = $year;
                }

                if($month == 1){
                    $pm = 12;
                    $py = $year - 1;
                    $nm = $month + 1;
                    $ny = $year;
                }

                if($month == 12){
                    $pm = $month - 1;
                    $py = $year;
                    $nm = 1;
                    $ny = $year + 1;
                }
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
                    if($day == $i && $day == date("j") && $mon == $curr_mon && $year == date('Y')){
                        $bg = "Lavender";
                    }
                    echo"<td bgcolor = \"$bg\">";
                        if($i >= $start_day){
                            echo $day;
                            $day++;
                        }
                    echo"</td>\n";
                }
                echo"</tr>\n";
                for($row = 0; $row < 5; $row++){
                    echo "<tr>";
                    for($col = 0; $col < 7; $col++){
                        $bg = "Khaki";
                        if($day == date("j") && $mon == $curr_mon && $year == date('Y')){
                            $bg = "Lavender";
                        }
                        echo "<td bgcolor = \"$bg\">";
                        if($day <= $numOfDays){
                            echo $day;
                            $day++;
                        }
                        echo "</td>\n";
                    }
                    echo "</tr>\n";
                }
            ?>
            </table>
            <br>
            <?php
                $self = $_SERVER['PHP_SELF'];
                echo "<h3><a href = \"$self?month=$pm&year=$py\">Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = \"$self?month=$nm&year=$ny\">Next</a></h3>";
            ?>
        </center>
    </body>
</html>
