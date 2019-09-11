<?php
error_reporting(E_ERROR); //suppress non-fatal errors
//This script is meant to be run via the command-line

//!!!!!!!!!!!!!!!!!!!!!!!!!!
//START SOLUTION
//Write your solution below
//Only use what is between here and the "END SOLUTION" comment to compute your score
//!!!!!!!!!!!!!!!!!!!!!!!!!!

function golf($v){
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
    echo "Input:\n$input\nOutput:\n$output";
    if ($output === $expected) {
        echo "\nPass!\n\n";
    } else {
        echo "\nFAIL!\n\n";
        die("Invalid Solution!\n");
    }
}
test("Steve 7:13\nBill 8\nWoz 21\n", "Steve 7:13\nBill 7:21\nWoz 7:42\n");
test("Justin 13:02\nAndrew 5\nKathleen 3\nPatrick 6\n", "Justin 13:02\nAndrew 13:07\nKathleen 13:10\nPatrick 13:16\n");
test("Dennis 20:44\nMac 18\nCharlie 11\nFrank 37\nDee 72\n", "Dennis 20:44\nMac 21:02\nCharlie 21:13\nFrank 21:50\nDee 23:02\n");
echo "All tests passed, valid solution!\n";
