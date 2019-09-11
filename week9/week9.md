# Week 9 - Substring deja-vu

## Summary

Let's get back into it with something straight-forward: given a string of alphabetical characters, find the longest substring that repeats itself in the string

## Example

**Input:**

`axxxbyyyycxxxd`

**Output:**

`xxx`

## Specifics

* Strings will be lowercase alpha with no spaces or other characters
* Substrings cannot overlap, eg. "axxxxb" should output "xx" (index 1-2 repeated at 3-4) not "xxx" (index 1-3 repeated at index 2-4)
