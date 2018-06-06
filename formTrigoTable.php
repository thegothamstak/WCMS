<!--
    PHP code to print sin, cos and tan values of numbers from min to max in a table.
    min and max will be sent from a form.
    (Here these 2 values are sent to the same form)
    Author : Shripad Tak
    Date : 6th June 2018
--->
<html>
    <head>
        <title>Trigonometric Table</title>
        <style>
            #header_div{
                font-family: Lucida Console;
                font-size: 30;
                font-weight: 775;
                height: 110px;
                width: auto;
                background-color: BurlyWood;
                color: AntiqueWhite;
            }

            #form_div{
                font-family: Lucida Console;
                font-size: 20;
                height: 290px;
                width: 300px;
                background-color: BlanchedAlmond;
            }

            #submit_button{
                height: 40px;
                width: 200px;
                font-family: Lucida Console;
                font-size: 20;
            }

            #year_input{
                height: 40px;
                width: 100px;
                font-family: Lucida Console;
                font-size: 20;
            }

            th{
                text-align: center;
                padding: 5px;
                width: 75px;
                height: 50px;
                border: black solid 2px;
                background-color: lightblue;
            }
            td{
                text-align: center;
                padding: 5px;
                width: 75px;
                height: 50px;
                border: black solid 2px;
                background-color: khaki;
            }

            #num{
                text-align: center;
                padding: 5px;
                width: 75px;
                height: 50px;
                border: black solid 2px;
                background-color: lightcyan;
            }

        </style>
    </head>
    <body bgcolor = "CadetBlue">
        <center>
            <?php
                if(array_key_exists('min',$_REQUEST)){
                    $min = $_GET['min'];
                    $max = $_GET['max'];

                    echo "<table>";
                        echo "<tr>";
                            echo "<th>Radian</th>";
                            echo "<th>Sin</th>";
                            echo "<th>Cos</th>";
                            echo "<th>Tan</th>";
                        echo "</tr>";
                        for($num = $min; $num <= $max; $num++){
                            echo "<tr>";
                                echo "<td id = \"num\">";
                                    echo $num;
                                echo "</td>";
                                echo "<td>";
                                    echo round(sin(deg2rad($num)),2);
                                echo "</td>";
                                echo "<td>";
                                    echo round(cos(deg2rad($num)),2);
                                echo "</td>";
                                echo "<td>";
                                    echo round(tan(deg2rad($num)),2);
                                echo "</td>";
                            echo "</tr>";
                        }
                    echo "</table>";
                }
                else{
                    $self = $_SERVER['PHP_SELF'];

                    echo "<div id = \"header_div\">";
                        echo"<br>";
                        echo"Trigonometric Table";
                    echo "</div>";
                    echo "<br><br><br>";
                    echo "<div id = \"form_div\">";
                        echo "<br><br><br>";
                        echo "<form action = $self method = \"GET\">";
                            echo "Enter min : <input type = \"number\" id = \"min_input\" name = \"min\">";
                            echo "<br><br>";
                            echo "Enter max : <input type = \"number\" id = \"max_input\" name = \"max\">";
                            echo "<br><br><br>";
                            echo "<input type = \"submit\" id = \"submit_button\">";
                        echo "</form>";
                    echo "</div>";
                }
            ?>
        </center>
    </body>
</html>
