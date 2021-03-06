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
    //FOR G11, right-side spacing and final newline are optional
    $output = rtrim($output);
    $output = explode("\n", $output);
    $output = array_map('rtrim', $output);
    $output = implode("\n", $output);
    //END G11
    echo "Input: $input, Output:\n$output\n";
    if ($output === $expected) {
        echo "pass\n";
    } else {
        echo "FAIL!\n";
        die("Invalid Solution!\n");
    }
}
test(3, " *** ***\n*   *   *\n *     *\n  *   *\n   * *\n    *");
test(5, "  *****   *****\n *     * *     *\n*       *       *\n *             *\n  *           *\n   *         *\n    *       *\n     *     *\n      *   *\n       * *\n        *");
test(7, "   *******     *******\n  *       *   *       *\n *         * *         *\n*           *           *\n *                     *\n  *                   *\n   *                 *\n    *               *\n     *             *\n      *           *\n       *         *\n        *       *\n         *     *\n          *   *\n           * *\n            *");
test(9, "    *********       *********\n   *         *     *         *\n  *           *   *           *\n *             * *             *\n*               *               *\n *                             *\n  *                           *\n   *                         *\n    *                       *\n     *                     *\n      *                   *\n       *                 *\n        *               *\n         *             *\n          *           *\n           *         *\n            *       *\n             *     *\n              *   *\n               * *\n                *");
test(25, "            *************************                       *************************\n           *                         *                     *                         *\n          *                           *                   *                           *\n         *                             *                 *                             *\n        *                               *               *                               *\n       *                                 *             *                                 *\n      *                                   *           *                                   *\n     *                                     *         *                                     *\n    *                                       *       *                                       *\n   *                                         *     *                                         *\n  *                                           *   *                                           *\n *                                             * *                                             *\n*                                               *                                               *\n *                                                                                             *\n  *                                                                                           *\n   *                                                                                         *\n    *                                                                                       *\n     *                                                                                     *\n      *                                                                                   *\n       *                                                                                 *\n        *                                                                               *\n         *                                                                             *\n          *                                                                           *\n           *                                                                         *\n            *                                                                       *\n             *                                                                     *\n              *                                                                   *\n               *                                                                 *\n                *                                                               *\n                 *                                                             *\n                  *                                                           *\n                   *                                                         *\n                    *                                                       *\n                     *                                                     *\n                      *                                                   *\n                       *                                                 *\n                        *                                               *\n                         *                                             *\n                          *                                           *\n                           *                                         *\n                            *                                       *\n                             *                                     *\n                              *                                   *\n                               *                                 *\n                                *                               *\n                                 *                             *\n                                  *                           *\n                                   *                         *\n                                    *                       *\n                                     *                     *\n                                      *                   *\n                                       *                 *\n                                        *               *\n                                         *             *\n                                          *           *\n                                           *         *\n                                            *       *\n                                             *     *\n                                              *   *\n                                               * *\n                                                *");
echo "\nAll tests passed, valid solution!\n\n";