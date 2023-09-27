<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting</title>
    <style>
    * {
        font-size: 1.0em;
    }

    h2.ArraySorting-top {
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


    p.ArraySorting-error {
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

    p.ArraySorting-Example {
        background-color: yellow;
        color: red;
        width: 100%;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;
    }

    p.ArraySorting-Exampleresult {
        width: 100%;
        text-align: center;
        border-color: bisque;
        background-color: rgb(232, 232, 199);
        color: rgb(0, 0, 0);
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;

    }

    p.ArraySorting-result {
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

    h2.ArraySorting-bottom {
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
   function sortGrades(array $grades){
        rsort($grades); // Sorting grades in descending order
        print_r($grades);
    }
    ?>

    <center>

        <a href="http://localhost/Ostad-PHP-main/Ostad-PHP-main/Module-3/3_Array_Sorting.php"
            style="text-decoration:none;cursor: pointer;">
            <h2 class=" ArraySorting-top">Array Sorting</h2>
        </a>
        <br>

        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>
                    <p class='ArraySorting-Example'>Example Array: [85, 92, 78, 88, 95]</p>
                </th>
            <tr></tr>
            <tr>
                <th><?php
                    /*-- Declearation & Initialization of grades array --*/
                    $grades = [85, 92, 78, 88, 95];
                ?>
                    <p class='ArraySorting-Exampleresult'>Result:
                        <?php
                        sortGrades($grades);
                        ?>
                    </p>
                </th>
            </tr>
        </table>
        <center> <br><br><br>
            <br>
            <h2 class="ArraySorting-bottom">Coded by <a href="https://mahmudrayhan.com"
                    style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/"
                    style="text-decoration:none; color:lightgreen;"> Ostad</a>
                Module-3
                {Task - 3}</h2><br>
        </center>
</body>

</html>
