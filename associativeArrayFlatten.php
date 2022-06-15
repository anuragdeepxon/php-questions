<?php

$associArray = array(
    "apple"   => 7,
    "banana"  => 5,
    [
        "water" => 2,
        "beer" => 5
    ]
);
function flatten($array = null)
{
    $output = array();
    function processing($data = null)
    {
        global $output;
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                processing($value);
            } else {
                $output[$key] = $value;
            }
        }
        return ($output);
    }
    return processing($array);
}

print_r(flatten($associArray));
