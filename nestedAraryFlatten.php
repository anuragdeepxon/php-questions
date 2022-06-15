<?php

$nested = [1, 2, [3, 4, 5, [6, [7, [4, 1, [5, 2]]]], 8, 9,], 10, 11];

function flatten($array = null)
{
    $output = array();

    function processing($data = null)
    {
        global $output;

        foreach ($data as $current) {
            if (is_array($current)) {
                processing($current);
            } else {
                $output[] = $current;
            }
        }
        return ($output);
    }

    return processing($array);
}

print_r(flatten($nested));
