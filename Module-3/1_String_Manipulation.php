<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
    <style>
    * {
        font-size: 1.0em;
    }

    h2.StringManipulation-top {
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


    p.StringManipulation-error {
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

    p.StringManipulation-Example {
        background-color: yellow;
        color: red;
        width: 100%;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;
    }

    p.StringManipulation-Exampleresult {
        width: 100%;
        text-align: center;
        border-color: bisque;
        background-color: rgb(232, 232, 199);
        color: rgb(0, 0, 0);
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;

    }

    p.StringManipulation-result {
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

    h2.StringManipulation-bottom {
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
    <!-- String_Manipulation_Function -->
    <?php
    function stringManipulation($text){
    /*-- Replacting 'brown' by 'red' --*/

    return str_replace("brown", "red", strtolower($text));
    }
           
    ?>

    <center>

        <a href="http://localhost/Ostad-PHP-main/Ostad-PHP-main/Module-3/1_String_Manipulation.php"
            style="text-decoration:none;cursor: pointer;">
            <h2 class=" StringManipulation-top">String Manipulation</h2>
        </a>
        <br>

        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>
                    <p class='StringManipulation-Example'>Example Data: The quick brown fox jumps over the lazy dog.</p>
                </th>
            <tr></tr>
            <tr>
                <th><?php
                $text = "The quick brown fox jumps over the lazy dog.";
                $Manipulated_Data = stringManipulation($text);
                echo "<p class='StringManipulation-Exampleresult'>Result Data:   {$Manipulated_Data}</p>";
                    ?>
                </th>
            </tr>
        </table>
        <br><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <table border="0" align="center">
                <tr>
                    <td><b>Insert Text</b></td>
                    <td> <input type="text" name="text" placeholder="Example: My brown Shoe." size="auto"
                            label="Input Text for Manipulation" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"> <button
                            style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; "
                            title="Click to generate loop values">Generate Manipualted String</button></th>
                </tr>
            </table>
        </form>

        <table border="0" align="center">
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2"><a
                        href="http://localhost/Ostad-PHP-main/Ostad-PHP-main/Module-3/1_String_Manipulation.php"
                        style="text-decoration:none;cursor: pointer;">
                        <input type="button" value="Reset All" ; style=" border-color:#000000; border-radius:4%;box-shadow: 0 2px 4px darkslategray;cursor:
                        pointer;color:greenyellow;background-color:#222222" title="Click to Reset all Values"></button>
                    </a> </th>
            </tr>
        </table>


        <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $text = filter_input(INPUT_POST, "text");
    ?>

        <!-- Run Function -->
        <center>
            <?php

    //Error handler
    $errors = false;

    // Checking if the input is not left empty
    if (empty($text)) {
    echo "<p class='StringManipulation-error'>Invalid Input!</p>";
    $errors = true;
    }

    // 1_String_Manipulation Function runs the provided data if there is no errors
    $Manipulated_Data = stringManipulation($text);

    echo "<p class='StringManipulation-result'>{$Manipulated_Data}</p>";

    }

    ?> <center> <br><br><br>
                <br>
                <h2 class="StringManipulation-bottom">Coded by <a href="https://mahmudrayhan.com"
                        style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a
                        href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a>
                    Module-3
                    {Task - 1}</h2><br>
            </center>
</body>

</html>
