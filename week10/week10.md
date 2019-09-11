# Week 10 - Stop! We have you surrounded!

This week's challenge is a JS challenge. Golfing in JS has the potential to be even grosser than PHP.

## Summary

Time for a game of cops and robbers! You are given a 2D grid of "C" for cops, "R" for the robber, and "-" as a blank space, output whether or not the robber should "run" or "surrender" based on whether or not they're surrounded. Because the cops have eaten too many donuts, they can't move, so the robber has a chance at getting away!

## Example

**Input:**

    -----
    -CCC-
    -CRC-
    -CCC-
    -----

**Output:**

`surrender`

**Input:**

    -----
    -CCC-
    -CRC-
    -C-C-
    -----

**Output:**

`run`

## Specifics

* Grids will be rectangular and vary in size
* There may be blank spaces between the cops and robbers
* There will only be one robber, and multiple cops
* The robber can escape diagonally
* JS Golfing tip: mind a variable's namespace when omitting the "var" keyword (it's global)
* JS Golfing tip: You cannot edit a string via array index notation
* Golfing tip: this problem is a bit algorithm-heavy, solve it first using regular code style, then golf your solution
