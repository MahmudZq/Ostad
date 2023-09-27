<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Manipulation</title>
    <style>
    * {
        font-size: 1.0em;
    }

    h2.ArrayManipulation-top {
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


    p.ArrayManipulation-error {
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

    p.ArrayManipulation-Example {
        background-color: yellow;
        color: red;
        width: 100%;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;
    }

    p.ArrayManipulation-Exampleresult {
        width: 100%;
        text-align: center;
        border-color: bisque;
        background-color: rgb(232, 232, 199);
        color: rgb(0, 0, 0);
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;

    }

    p.ArrayManipulation-result {
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

    h2.ArrayManipulation-bottom {
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
    <!-- Array_Manipulation_Function -->
    <?php
    function removeEvenNumber($numbers)
    {

        /*-- Removing even numbers using array_filter() function --*/
        return array_filter($numbers, function ($values) {
            return $values % 2 != 0;
        });
    }
    ?>

    <center>

        <a href="http://localhost/Ostad-PHP-main/Ostad-PHP-main/Module-3/2_Array_Manipulation.php"
            style="text-decoration:none;cursor: pointer;">
            <h2 class=" ArrayManipulation-top">Array Manipulation</h2>
        </a>
        <br>

        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>
                    <p class='ArrayManipulation-Example'>Example Array: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];</p>
                </th>
            <tr></tr>
            <tr>
                <th><?php
                /*-- Declearation & Initialization of numbers array --*/
                $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                ?>
                    <p class='ArrayManipulation-Exampleresult'>Result:
                        <?php
                        print_r(removeEvenNumber($numbers));
                        ?>
                    </p>
                </th>
            </tr>
        </table>
        <center> <br><br><br>
            <br>
            <h2 class="ArrayManipulation-bottom">Coded by <a href="https://mahmudrayhan.com"
                    style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/"
                    style="text-decoration:none; color:lightgreen;"> Ostad</a>
                Module-3
                {Task - 2}</h2><br>
        </center>
</body>

</html>