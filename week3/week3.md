# Week 3 - Blops and Glufs

## Summary

Blops and Glufs are creatures that exist in a 2-dimensional grid. Blops want to safely get to the
bottom-right of their grid, while Glufs want to eat the travelling Blops.

A single Blop will always start in the top-left of their grid (at 0,0) and Glufs are placed randomly.
Blops can only move in two directions, right or down (but not both at once, ie. not diagonally).
Glufs cannot move, and instead have to hope that poorly programmed Blops bump into them so
that they may gobble them up.

Write a program that outputs a safe series of movements for your Blop to get from the top-left to
bottom-right of the given grid populated by Glufs without getting eaten.

## Example

**Input:**

    B-G---
    G----G
    --G-G-
    --G--G
    GG-G-G
    --GG--

**Output:**

`RDRRDDRDDR`

##Specifics

* Grids are formatted as 2D array of rows and columns, accessed like $grid[$row][$column]
* Grids will vary in size
* Grids will likely have multiple solutions
* Grids will have at least one valid solution, there will be no unsolvable grids
* Attempting to move out of bounds will result in a failure
* Don't try to brute-force the solution. By this I mean don't generate every possible output string until you find one that works, eg. "RRRRDDDD", check if it works, if not, generate "RRRDDDR", check if it works, etc. for each possible valid combination of the letter "R" and "D". For the record I don't think this would be a winning approach (re: code length), but regardless I don't want people to waste their/my time/CPU cycles by trying it.