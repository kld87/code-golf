# Week 11 - Heart-Shaped ASCII Box

## Summary

It's February 15th and once again you've forgotten Valentines Day, and have been relegated to sleeping on the couch. Next to you is your trusty laptop, and you've decided to use it to make things right:

They say the greatest type of gift is one you make yourself. For some reason, to express your love and regret to your partner, you've decided to write a program to generate an ASCII heart of a specified size. You romantic, you!

Create a program that, when given an odd number "v" of 3 or greater, it outputs an ASCII heart, made of asterisks, spaces, and newlines.

## Examples

**Input: 3, Output:**

     *** ***
    *   *   *
     *     *
      *   *
       * *
        *


**Input: 5, Output:**

      *****   *****
     *     * *     *
    *       *       *
     *             *
      *           *
       *         *
        *       *
         *     *
          *   *
           * *
            *

**Input: 7, Output:**

       *******     *******
      *       *   *       *
     *         * *         *
    *           *           *
     *                     *
      *                   *
       *                 *
        *               *
         *             *
          *           *
           *         *
            *       *
             *     *
              *   *
               * *
                *


## Specifics

* "v" is equivalent to the length of one of the two lines at the top of the heart in the first row
* "v" will always be an odd number >= 3. Your solution should work for all potential values of v (not just the test cases)
* Right-side spacing is optional (test cases will rtrim your output)
* The final newline character in the last row is optional
* Tip: when debugging, you may find it easier to use a period (or some other character) instead of a space to help visualize things
* Tip: consider the mathematical correlation between v and the spacing/shape of the rest of the heart
