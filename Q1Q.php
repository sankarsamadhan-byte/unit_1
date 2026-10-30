<?php

function prie($n1, $n2, $n3)
{
    if($n1 < 0 || $n2 < 0 || $n3 < 0)
    {
        echo "Negative value not allowed";
        return;
    }

    if($n1 == 0 || $n2 == 0 || $n3 == 0)
    {
        echo "0 is not allowed";
        return;
    }

    $sum = $n1 + $n2 + $n3;

    echo "$sum is ";

    if($sum < 2)
    {
        echo "NOT prime number";
        return;
    }

    for($i = 2; $i < $sum; $i++)
    {
        if($sum % $i == 0)
        {
            echo "NOT prime number";
            return;
        }
    }

    echo "Prime number";
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    prie($n1, $n2, $n3);
}

?>