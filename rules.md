## Introduction

The objective of a "code golf" competition is to solve a programming challenge with as few characters of code as possible. This makes code golf an easy coding competition to judge objectively (without it being a race). Solving challenges in this way encourages lateral thinking and garners an intimate familiarity of the capabilities and rules of the language being used.

For example, given the challenge "output the numbers between 1 and 10 (inclusive) each on their own lines", the following code:

> for ($i = 1; $i <= 10; $i++) echo "$i\n";

loses to the shorter:

> while(++$i < 11) echo "$i\n";

## The Competition

Each Friday at the end of Scrum the next week's challenge will be introduced, and the current week's winner will be announced. The prize will be getting to leave an hour early (as long as they aren't needed to stay the full day to complete a pressing task). After Scrum everyone's submissions will be made available for the group to review to compare approaches and as inspiration for solutions to future challenges.

Competitors may work on the challenge while at the office within reason (meaning here and there as a break or when there are no pressing tasks to complete). As a general rule, no more than an 2 hours per week should be spent on a challenge while "on the clock". Participants may spend as much of their own time as they like attempting to solve the challenge.

## Rules

### Logistics
Lowest scoring solution by character count wins. In the event of a tie, whoever submitted their solution first will win.

Whitespace and newline characters will not be counted in scoring, this is to allow solutions to be more readable. The official character count will come from "Characters (without spaces)" via [https://charactercounttool.com/](https://charactercounttool.com/)

### General
Be honourable. Solve the problem yourself, don't post online asking for help, or Google/StackOverflow/etc. the challenge. A lot of the challenges will be adapted versions of existing problems for which there will be solutions online.
Try to avoid searching fora generalized versions of the challenge as well. Use your judgement here, we want to encourage participants to improve their familiarity with the language's capabilities and their programming abilities in general, but still have people come up with the approach and solution to the problem themselves.

Eg. for the challenge "Given a paragraph of text, output the 5 most frequently occurring words", you should *not* search "PHP get words from text", but searching "PHP split string" would be okay.

In general terms, it's okay to search how to do a certain programmatic operation, but not how to accomplish a desired goal.

Feel free to discuss the challenge, possible approaches, tips, tricks, how to do something in PHP, etc. w/ other competitors, but remember there will only be one winner each week.

### Tech

Code must be written in PHP and run under HHVM 3.X LTS (the version our Vagrant instance uses). This means some of the latest functionalities in vanilla PHP may not be available, but all the custom functionality Hack introduces is.

Script execution will set error reporting to E_ERROR only. This means writing code that triggers warnings (eg. using undefined variables) or deprecated functions is fair game. You may want to revert this while coming up with a solution to ease debugging.

* [http://php.net/manual/en/function.error-reporting.php](http://php.net/manual/en/function.error-reporting.php)
* [http://php.net/manual/en/errorfunc.constants.php](http://php.net/manual/en/errorfunc.constants.php)

Solutions may not access the underlying environment, file system, shell, network (eg. no [https://gkoberger.github.io/stacksort/](https://gkoberger.github.io/stacksort/)), etc. to solve a problem, unless otherwise stated. If you are unsure if something you're trying to do is legal, or feel like it may be bending the rules, ask the judge.

### Tips

Think about / "whiteboard" the problem and possible solutions before writing code. Keep in mind that the "best practice" way of solving the problem likely isn't the shortest code-wise. Consider coding multiple approaches to the problem and then refining them to see how small a footprint can be achieved.

Remember space-saving techniques like ternary operators, increment/decrement operators, logical operators in variable assignments, assignments in loop declarations, etc.

Feel free to abuse the flexibility and underlying quirks of a language when they can be used to save space.

Review the PHP docs, especially the topics re: built-in functions for strings, arrays, regex, lambdas, and etc:

* [http://php.net/manual/en/ref.strings.php](http://php.net/manual/en/ref.strings.php)
* [http://php.net/manual/en/ref.array.php](http://php.net/manual/en/ref.array.php)
* [http://php.net/manual/en/ref.pcre.php](http://php.net/manual/en/ref.pcre.php)
* [http://www.php.net/manual/en/language.functions.php](http://php.net/manual/en/ref.pcre.php)