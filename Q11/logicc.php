<?php

function sum($num)
{
    $sum=0;
    $dig=str_split($num);
    foreach($dig as $sam)
        {
            $sum=$sum+$sam;
        }
        return $sum;
}
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $see=$_POST["n1"];
        $asn=sum($see);
        echo("answe is".$asn);
    }
?>