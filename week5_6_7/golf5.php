<?php
error_reporting(E_ERROR); //suppress non-fatal errors
//This script is meant to be run via the command-line

//!!!!!!!!!!!!!!!!!!!!!!!!!!
//START SOLUTION
//Write your solution below
//Only use what is between here and the "END SOLUTION" comment to compute your score
//!!!!!!!!!!!!!!!!!!!!!!!!!!

function golf5() {
}

//!!!!!!!!!!!!!!!!!!!!!!!!!!
//END SOLUTION
//Do not touch the code below this comment block
//It exists to help verify your above solution
//Do not include it in the character count for your solution
//!!!!!!!!!!!!!!!!!!!!!!!!!!
function test() {
    //first event
    $output = golf5();
    echo "Event 1:\n\n$output\n\n";
    if ($output !== 'both 1961 1962 1963 both 1965 1966 1967 both 1969 1970 1971 both 1973 1974 1975 both 1977 1978 1979 both 1981 1982 1983 both 1985 1986 1987 both 1989 1990 1991 both 1993 winter 1995 summer 1997 winter 1999 summer 2001 winter 2003 summer 2005 winter 2007 summer 2009 winter 2011 summer 2013 winter 2015 summer 2017 winter')
            die("FIRST EVENT FAILED\n\n");
    echo "First event passed!\n\n";
}
test();
echo "  .,::OOO::,.     .,ooOOOoo,.     .,::OOO::,.\n.:'         `:. .8'         `8. .:'         `:.\n:\"           \": 8\"           \"8 :\"           \":\n:,        .,:::\"\"::,.     .,:o8OO::,.        ,:\n :,,    .:' ,:   8oo`:. .:'oo8   :,,`:.    ,,:\n  `^OOoo:\"O^'     `^88oo:\"8^'     `^O\":ooOO^'\n        :,           ,: :,           ,:\n         :,,       ,,:   :,,       ,,:\n          `^Oo,,,oO^'     `^OOoooOO^'";
echo "\n\nAll tests passed, valid solution!\n";
