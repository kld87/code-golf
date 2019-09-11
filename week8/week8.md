# Week 8 - Hail, Caesar!

## Summary

To mix things up, this week's challenge will be done in JavaScript. Submissions must run in the latest stable version of Chrome and otherwise follow the standard contest rules (no network access, etc.)

In cryptography, a Caesar cipher is a simple means of encryption which involves the substitution of letters with other letters to encrypt the text. The substituted letters will be N characters away from their original value, wrapping around from z to a when applicable.

## Example

`this is some text`

with a N of 3 encrypts to:

`wklv lv vrph whaw`

Because t + 3 = w, h + 3 = k ... x + 3 = a, etc.

## Challenge

For this challenge, your function will take a string of text encrypted using a Caesar cipher. It must return the decrypted version of the text.

For our purposes, we will assume that the letter "e" will occur more than any other in the cipher text (this is generally true for English), and will only contain lowercase letters, spaces, and punctuation.
