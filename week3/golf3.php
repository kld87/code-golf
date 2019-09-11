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
function test($input) {
    $output = golf($input);

    //I/O
    echo "Input:\n\n";
    foreach ($input as $r) {
        foreach ($r as $c) {
            echo $c;
        }
        echo "\n";
    }
    echo "\nOutput: $output - ";

    //validate
    $r = 0;
    $c = 0;
    for ($i = 0; $i < strlen($output); $i++) {
        switch ($output[$i]) {
            case 'R':
                $c++;
                break;
            case 'D':
                $r++;
                break;
            default:
                die("Invalid output\n");
        }
        if (!isset($input[$r][$c])) die("FAIL: Out of bounds at $r, $c\n");
        if ($input[$r][$c] == "G") die("FAIL: Gobble Gobble! Your Blop got eaten by a Gluf at $r, $c!\n");
    }
    if ($r != count($input)-1 || $c != count($input[0])-1) die("Failed to reach destination, ended at $r, $c\n");
    echo "PASS\n\n";
}
test([
    ['B', 'G', '-', '-'],
    ['-', 'G', '-', '-'],
    ['-', 'G', '-', '-'],
    ['-', '-', '-', '-'],
]);
test([
    ['B', '-', '-', '-'],
    ['G', 'G', 'G', '-'],
    ['-', '-', '-', '-'],
    ['-', '-', '-', '-'],
]);
test([
    ['B', 'G', '-', '-'],
    ['-', '-', 'G', '-'],
    ['G', '-', '-', 'G'],
    ['-', 'G', '-', '-'],
]);
test([
    ['B', '-', 'G', '-'],
    ['G', '-', '-', 'G'],
    ['-', 'G', '-', '-'],
    ['-', '-', 'G', '-'],
]);
test([
    ['B', '-', 'G', '-', '-', '-'],
    ['G', '-', '-', '-', '-', 'G'],
    ['-', '-', 'G', '-', 'G', '-'],
    ['-', '-', 'G', '-', '-', 'G'],
    ['G', 'G', '-', 'G', '-', 'G'],
    ['-', '-', 'G', 'G', '-', '-'],
]);
test([
    ['B', '-', '-', '-', '-', 'G', '-'],
    ['-', '-', 'G', '-', 'G', '-', 'G'],
    ['-', '-', '-', '-', '-', '-', '-'],
    ['-', '-', '-', 'G', 'G', '-', '-'],
    ['-', 'G', 'G', '-', '-', '-', '-'],
    ['G', 'G', '-', '-', '-', '-', 'G'],
    ['-', '-', '-', '-', 'G', '-', '-'],
    ['G', 'G', '-', 'G', '-', 'G', '-'],
    ['-', '-', '-', '-', '-', '-', '-'],
]);
test([
    ['B', '-', 'G', 'G', '-', '-', '-', '-', 'G', '-'],
    ['-', 'G', '-', 'G', '-', '-', '-', '-', '-', '-'],
    ['-', '-', '-', '-', 'G', 'G', '-', '-', '-', '-'],
    ['G', '-', '-', '-', '-', '-', '-', '-', '-', 'G'],
    ['-', 'G', '-', '-', 'G', 'G', '-', '-', '-', '-'],
    ['G', '-', 'G', '-', '-', '-', '-', 'G', '-', '-'],
]);
test([
    ['B', 'G', 'G', 'G', 'G'],
    ['-', '-', '-', 'G', '-'],
    ['-', 'G', '-', '-', '-'],
    ['-', 'G', '-', 'G', '-'],
]);
test([
    ['B', '-', '-', 'G', '-', 'G'],
    ['-', 'G', '-', 'G', 'G', '-'],
    ['G', 'G', '-', '-', '-', '-'],
    ['G', '-', 'G', 'G', '-', '-'],
    ['-', '-', 'G', '-', '-', '-'],
    ['-', '-', '-', 'G', '-', 'G'],
    ['-', '-', 'G', 'G', '-', '-'],
    ['-', '-', '-', '-', '-', '-'],
    ['G', '-', 'G', '-', '-', '-'],
    ['G', 'G', '-', '-', '-', '-'],
]);

echo "All tests passed, valid solution!\n";
