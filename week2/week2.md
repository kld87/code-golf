# Week 2 - Meeting Clock

## Challenge

Given an input of a list of names and times:

* Derek 9:30
* David 1
* Pete 7
* Gabe 12

Meaning that Derek started a meeting at 9:30, David showed up a minute later, Pete showed up 7 minutes after David, and Gabe showed up 12 minutes after Pete, etc.

Your solution should output the list of names with the times they showed up for the meeting, as per below:

* Derek 9:30
* David 9:31
* Pete 9:37
* Gabe 9:49

## Specifics

* Use a 24 hour clock
* Meetings will not go past midnight (so don't worry about clock rollover)
* People who are more than an hour late will still be input in minutes, eg. "75" not "1:15"
* There will be no early arrivers (no negative values)
* Be mindful of newlines, the tests expect each line to have a newline at the end including the last one
