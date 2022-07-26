<?php
     

    

 function display($number)
{
    $array=['h','e','l','l','o'];
    if ($number >= 0) {
        echo $array[$number].",";

        display($number - 1);
    }
}

display(4);

?>