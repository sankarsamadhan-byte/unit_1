<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="n1">
        <input type="number" name="n2">
    <input type="submit" value="submit">
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n1=$_POST["n1"];
        $n2=$_POST["n2"];

            if($n1>$n2)
                {
                    echo "max  vlaue is  $n1";
                    echo "min vlaue $n2";
                }
            elseif($n1<$n2)
                {
                    echo "Max i  $n2";
                    echo "min vlaue $n1";

                }
                else
                    {
                        echo "both are  smae ";
                    }


    }



?>


</body>
</html>