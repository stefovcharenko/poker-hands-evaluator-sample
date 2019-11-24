Poker Hands Evaluator Sample APP
================================

This app shows 
[Poker hands evaluator](https://github.com/stefovcharenko/poker-hands-evaluator)
library use case.
 
Requirements
============

* PHP >= 7.2.9
* mbstring PHP extension

Installation
============

Run `composer install` to install Composer dependencies required for app.

Usage
=====
Execute `php console` to see all available commands list.

Poker hands evaluator can be started with following command:
```
php console app:evaluate-poker-hands <filePath>
``` 
`<filePath>` is a full path to file hands will be parsed from, e.g. `/home/user/poker_hands.txt`. 