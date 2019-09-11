<?php
error_reporting(E_ERROR); //suppress non-fatal errors
//This script is meant to be run via the command-line

//!!!!!!!!!!!!!!!!!!!!!!!!!!
//START SOLUTION
//Write your solution below
//Only use what is between here and the "END SOLUTION" comment to compute your score
//!!!!!!!!!!!!!!!!!!!!!!!!!!

function golf($p, $a){
}

//!!!!!!!!!!!!!!!!!!!!!!!!!!
//END SOLUTION
//Do not touch the code below this comment block
//It exists to help verify your above solution
//Do not include it in the character count for your solution
//!!!!!!!!!!!!!!!!!!!!!!!!!!
function test($passcode, $attempt, $expected) {
    $output = golf($passcode, $attempt);
    echo "Passcode: $passcode, Attempt: $attempt, Output: " . ($output === true ? "true" : "false");
    if ($output === $expected) {
        echo " - Pass!\n";
    } else {
        echo " - FAIL!\n";
        die("Invalid Solution!\n");
    }
}
test(12345, 12345, true);
test(12345, 12645, true);
test(12345, 12445, false);
test(12345, 55345, false);
test(12345, 123456, false);
test(12345, 1234, false);
test(1234567890, 2234567890, true);
test(1234567890, 1434567890, true);
test(1234567890, 1254567890, true);
test(1234567890, 1231567890, true);
test(1234567890, 1234167890, true);
test(1234567890, 1234527890, true);
test(1234567890, 1234568890, true);
test(1234567890, 1234567090, true);
test(1234567890, 1234567800, true);
test(1234567890, 1234567899, true);
test(1234567890, 3234567890, false);
test(1234567890, 1034567890, false);
test(1234567890, 1244567890, false);
test(1234567890, 1239567890, false);
test(1234567890, 1234067890, false);
test(1234567890, 1234577890, false);
test(1234567890, 1234563890, false);
test(1234567890, 1234567290, false);
test(1234567890, 1234567870, false);
test(1234567890, 1234567893, false);
echo "All tests passed, valid solution!\n";
