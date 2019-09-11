# Week 4 - Drunk Dial

## Challenge

My apartment has keypad access. After coming home from the bar, I sometimes mistakenly press a number next to the one I meant to press on the keypad when entering the passcode. If this happens, I want my apartment to still let me in, given that I was "close enough" to the proper code. Luckily, I have a state-of-the-art smart lock that will let me reprogram its security protocols.

Your solution should let me into my apartment if I make a single mistake when entering the passcode, assuming that mistake was that I pressed a number directly adjacent to the correct number on the keypad, pictured below:

    1 2 3
    4 5 6
    7 8 9
      0

For example, 2, 4, and 5 are adjacent to 1. Everything is adjacent to 5 except 0. Adjacent to 8 is 4, 5, 6, 7, 9, and 0, etc.

## Examples

    Passcode  Input    Output
    12345     12345    true
    12345     12645    true
    12345     12445    false
    12345     55345    false
    12345     123456   false
    12345     1234     false

## Specifics

* Your function will take two arguments, $p for the passcode and $a for my attempt
* Your function should return true to unlock my apartment and false to not unlock it
* Only one mistake allowed per attempt, no more
* It should fail if the attempt was too long or too short
