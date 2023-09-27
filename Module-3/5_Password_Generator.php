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

    h2.PasswordGenerator-top {
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


    p.PasswordGenerator-error {
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

    p.PasswordGenerator-result {
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

    p.PasswordGenerator-NewPassword {
        width: 40%;
        text-align: center;
        border: 0.2em;
        border-color: bisque;
        border-radius: 0%;
        background-color: rgb(232, 232, 199);
        color: red;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
        position: relative;

    }



    h2.PasswordGenerator-bottom {
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
    function generatePassword($length){
        /*-- Character variable containing all character --*/
        $allCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";

        $characterLength = strlen($allCharacters); // Calculating length of the character variable

        $password = '';

        /*-- Assigning 1 by 1 character to 'password' variable by iteration --*/
        for($i = 0; $i < $length; $i++):
            $password .= $allCharacters[rand(0, $characterLength - 1)];
        endfor;

        return $password;
    }
           
    ?>

    <center>

        <a href="http://localhost/Ostad-PHP-main/Ostad-PHP-main/Module-3/5_Password_Generator.php"
            style="text-decoration:none;cursor: pointer;">
            <h2 class=" PasswordGenerator-top">Password Generator</h2>
        </a>
        <br>
        <br><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <table border="0" align="center">
                <tr>
                    <th colspan="2"> <button
                            style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; "
                            title="Click to generate password">Generate Password</button></th>
                </tr>
            </table>
        </form>

        <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    ?>
        <p class='PasswordGenerator-result'>
            New Generated Password:&emsp;<span style="color:red;"><?php echo generatePassword(12);?></span>
        </p>
        <?php 
    } ?>
        <center> <br><br><br>
            <br>
            <h2 class="PasswordGenerator-bottom">Coded by <a href="https://mahmudrayhan.com"
                    style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/"
                    style="text-decoration:none; color:lightgreen;"> Ostad</a>
                Module-3
                {Task - 5}</h2><br>
        </center>
</body>

</html>