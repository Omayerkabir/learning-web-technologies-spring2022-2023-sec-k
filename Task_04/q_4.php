<?php

    $a = readline("Enter the Number: ");
    $b = readline("Enter the Number: ");
    $c = readline("Enter the Number: ");

    if($a>$b && $a>$b)
    {
        echo "largest number: ".$a."\r\n";
    }
    else if($b>$c && $b>$c)
    {
        echo "largest number: ".$b."\r\n";
    }
    else if($c>$a && $c>$b)
    {
        echo "largest number: ".$c."\r\n";
    }
    else
    {
        echo"Values are Equal ";
    }
?>
      