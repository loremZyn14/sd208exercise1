<?php

 function countWord($string)
{
    $words = explode(" ",$string);
    $words = array_count_values($words);
    print_r($words);
}

countWord("test test sadas retfdg sdrfashd dwefsfsd sdf");


?>