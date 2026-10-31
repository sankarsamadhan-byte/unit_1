<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <input type="text" name="str">
    <input type="submit" value="sub">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["str"];
    
        if($name==strrev($name))
            {
                echo "YES";
            }
            else
                {
                    echo "NOT";
                }
    
    
    
        }

?>

    
</body>
</html>