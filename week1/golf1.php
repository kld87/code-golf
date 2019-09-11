<?php
error_reporting(E_ERROR); //suppress non-fatal errors
//This script is meant to be run via the command-line

//!!!!!!!!!!!!!!!!!!!!!!!!!!
//START SOLUTION
//Write your solution below
//Only use what is between here and the "END SOLUTION" comment to compute your score
//!!!!!!!!!!!!!!!!!!!!!!!!!!

function golf($v) {
    return $v;
}

//!!!!!!!!!!!!!!!!!!!!!!!!!!
//END SOLUTION
//Do not touch the code below this comment block
//It exists to help verify your above solution
//Do not include it in the character count for your solution
//!!!!!!!!!!!!!!!!!!!!!!!!!!
function test($input, $expected) {
    $output = golf($input);
    echo "Input: $input, Output: $output - ";
    if ($output === $expected) {
        echo "pass\n";
    } else {
        echo "FAIL!\n";
        die("Invalid Solution!\n");
    }
}
test('N', 'NNW NNE');
test('NNE', 'N NE');
test('NE', 'NNE ENE');
test('ENE', 'NE E');
test('E', 'ENE ESE');
test('ESE', 'E SE');
test('SE', 'ESE SSE');
test('SSE', 'SE S');
test('S', 'SSE SSW');
test('SSW', 'S SW');
test('SW', 'SSW WSW');
test('WSW', 'SW W');
test('W', 'WSW WNW');
test('WNW', 'W NW');
test('NW', 'WNW NNW');
test('NNW', 'NW N');
echo "\nAll tests passed, valid solution!\n\n";