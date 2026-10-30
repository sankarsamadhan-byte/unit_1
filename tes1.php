<?php

function summ($num)
{

    $sum=0;

    $ans=str_split($num);

    foreach($ans as $i)
        {
            $sum=$sum+$i;

        }   

        return $sum;
<?
}
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $ans=$_POST["n1"];
        $see=summ($ans);
        print($see);

    }


?>