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
test('abcababc', 'abc');
test('zccccybbxa', 'cc');
test('zccccybbxaaawbbvaaaubbtbbsccr', 'aaa');
test('dabceabc', 'abc');
test('abcdabce', 'abc');
test('abcabcabc', 'abc');
test('aaaaaaa', 'aaa');
test('axxxaxxxa', 'axxx');
test('axaxaxaxaxaxa', 'axaxax');
echo "\nAll tests passed, valid solution!\n\n";