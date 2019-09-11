# Weeks 5, 6, 7 - Code Golf Olympic Triathlon

## The Challenge

In honour of the 2018 Winter Olympics, PSD Code Golf will be hosting a special 3 week challenge.

The triathlon will feature 3 "events" (functions), one per week, where the output from week 1 will be the input for week 2, and week 2's output will be the input for week 3.

There is a caveat: the submissions for week 2 and 3 will still include the functions from the previous weeks for scoring, given that their input/output is chained together.

This means that after the submissions for week 1 and 2 are revealed, other competitors may draw inspiration (or straight up copy) the winning submissions from the previous week(s) for use in their submission for the current week's challenge. They will also have the opportunity to improve those functions even after their respective week is over, since they will continue to be used in scoring future weeks. This format means competitors do not needs to submit a solution every week to be able to compete (but are still encouraged to).

The theme for the three events will be related to the fundamentals of golfing: "Loops", "Strings", and "Arrays".

## Scoring

* For week 1, submit your score as usual: "code golf 123"
* For week 2, submit your score as: "code golf 123 + 234 = 357", where 123 is the count for your first function, 234 the count for the second, and 357 the total of the two.
* For week 3: submit your score as "code golf 123 + 234 + 345 = 702"

The total score each week will determine the winner, but this format should keep things more interesting as scores are posted.

## Events

### Event 1: Loops

Return the years between 1960 and 2018 (inclusive) as a string of numbers with spaces in between them. For each year there was an Olympics, put "winter", "summer" or "both" (to match the type that happened) instead of the year.

From 1960 - 1992 the Olympics happened every 4 years, with both a winter and summer happening in the same year. In 1994 there was only a winter Olympics, in 1996 only a summer Olympics, then a winter again in 1998, etc.

**Example output (ellipses added for brevity):**

both 1961 1962 1963 both 1965 ... 1991 both 1993 winter 1995 summer 1997 winter ... 2017 winter

See: [Reference](https://en.wikipedia.org/wiki/List_of_Olympic_Games_host_cities)

### Event 2: Strings

Given the output from the first event as input, replace "winter", "summer" and "both" with the name(s) of the city/cities that hosted the respective Olympics for that year. For "both", output the cities in respective order joined by a slash. For cities with spaces in their names, replace the space with an underscore (the reason for this will become clear in the next event).

You must replace the occurrences in the input string, you may not regenerate a new string from scratch, ie. re-use the approach from week 1 but with inserting the city names instead of generic strings.

**Example output (ellipses added for brevity):**

Squaw_Valley/Rome 1961 1962 1963 Innsbruck/Tokyo 1965 ... 1991 Albertville/Barcelona 1993 Lillehammer 1995 Atlanta 1997 Nagano ... 2017 Pyeongchang

See: [Reference](https://en.wikipedia.org/wiki/List_of_Olympic_Games_host_cities)

### Event 3: Arrays

Given the output from the second event as input, extract the names of the cities into an array. Sort that array alphabetically without using any built-in sorting functions such as sort(). For cities joined by a slash, you will need to separate them and sort them independently.

**Example output (ellipses added for brevity):**

['Athens', 'Atlanta', ..., 'Turin', 'Vancouver']

## Specifics:

No code outside the provided function definitions, ie. global variables, objects, extra functions, etc. Each event should be treated as a standalone challenge; this means you may not use a global variable (or anything else) as part of Event 1 to assist in the solution of Event 2, or anything along those lines.

For weeks 2 and 3, you are encouraged to try to improve on the functions from the previous week to improve your score for the current week.
