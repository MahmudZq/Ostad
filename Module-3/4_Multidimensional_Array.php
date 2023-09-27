<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
    <style>
    * {
        font-size: 1.0em;
    }

    h2.MultidimensionalArray-top {
        width: 400px;
        text-align: center;
        border: 0.2em;
        border-color: grey;
        border-radius: 0%;
        background-color: black;
        color: white;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 900;
        font-size: xx-large;
    }


    p.MultidimensionalArray-error {
        background-color: yellow;
        color: red;
        width: 40%;
        text-align: center;
        border: 0.2em;
        border-color: bisque;
        border-radius: 0%;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;
    }

    p.MultidimensionalArray-Example {
        background-color: yellow;
        color: red;
        width: 100%;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;
    }

    p.MultidimensionalArray-Exampleresult {
        width: 100%;
        text-align: center;
        border-color: bisque;
        background-color: rgb(232, 232, 199);
        color: rgb(0, 0, 0);
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;

    }

    p.MultidimensionalArray-result {
        width: 40%;
        text-align: center;
        border: 0.2em;
        border-color: bisque;
        border-radius: 0%;
        background-color: rgb(232, 232, 199);
        color: rgb(0, 0, 0);
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;

    }

    h2.MultidimensionalArray-bottom {
        width: 50%;
        text-align: center;
        border: 0.2em;
        border-color: balck;
        border-radius: 0%;
        background-color: #222222;
        color: lightgreen;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 600;
    }
    </style>
</head>

<body>
    <!-- Array_Sorting_Function -->
    <?php
   /*-- calculateGradeAvg() function --*/
    function gradeAvg(array $studentGrades){
        foreach($studentGrades as $student => $grades):
            $sum = array_sum($grades); // Calculating sum for each student
            $totalItem = count($grades); // Calculating total subject for each student
            $average = number_format(($sum / $totalItem), 2); // Calculating average

            echo "Student ".($student + 1)."'s average grade : {$average}\n\n"."<br>";
        endforeach;
    }
    ?>

    <center>

        <a href="http://localhost/Ostad-PHP-main/Ostad-PHP-main/Module-3/4_Multidimensional_Array.php"
            style="text-decoration:none;cursor: pointer;">
            <h2 class=" MultidimensionalArray-top">Multidimensional Array</h2>
        </a>
        <br>

        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>
                    <p class='MultidimensionalArray-Example'>Example Data<br>Student[1] data:&emsp; Math=95
                        &emsp;English=90 &emsp; Science=89<br>Student[2] data:&emsp; Math=98
                        &emsp;English=92 &emsp; Science=92<br>Student[3] data:&emsp; Math=99
                        &emsp;English=94 &emsp; Science=95
                    </p>
                </th>
            <tr></tr>
            <tr>
                <th><?php
                    /*-- Declearation & Initialization of studentGrades array --*/
    $studentGrades = [
        ['Math' => 95, 'English' => 90, 'Science' => 89],
        ['Math' => 98, 'English' => 92, 'Science' => 92],
        ['Math' => 99, 'English' => 94, 'Science' => 95]
    ];
                ?>
                    <p class='MultidimensionalArray-Exampleresult'>Result:<br>
                        <?php
                        gradeAvg($studentGrades);
                        ?>
                    </p>
                </th>
            </tr>
        </table>
        <center> <br><br><br>
            <br>
            <h2 class="MultidimensionalArray-bottom">Coded by <a href="https://mahmudrayhan.com"
                    style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/"
                    style="text-decoration:none; color:lightgreen;"> Ostad</a>
                Module-3
                {Task - 4}</h2><br>
        </center>
</body>

</html>