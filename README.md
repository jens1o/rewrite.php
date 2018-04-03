# rewrite.php

> eat. sleep. code. re..write.

This project intends to rewrite all included functions in the PHP scripting language. It's like a coding challenge, but you are going to learn alot about what PHP needs to in the background(although you won't need to handle the language basics). Simply consider it as a strategy game, and each and every game comes with rules.

## Rules

**Do NOT use other PHP functions.**
That would ruin the challenge. You're only allowed to use other helper constructs who already exist in the codebase and php language constructs(this includes `echo`, `isset`, `empty` and loops).

**Obey the format.**
Each function is mapped into a category, and then you need to put it into the `src` folder and name it `php_<categoryName>.php` and include it into the `composer.json` file to autoload it. Each file has this header:
```php
<?php
declare(strict_types=1);
namespace php;

// function imports
use function php\strlen;

// your declarations

```
(I bet that the PHP language team would never use such a namespace, so just use it.)
Please use PSR-2 formatting.
Use latest PHP features(PHP 7.2), and especially things to clean up your code(typehints, [null] return types).

Feel free to use `phpdoc`, and it is expected to write which volunteer wrote/edit a function using the `author` tag.

**Write tests.**
Yes, this is painful, but it will garuntee that everything is working fine. We use `PHPUnit` for that. Please especially test against the examples included in the manual page. It should return the same output as the vanilla php equalvalient.

**Rewrite code so its faster**
Performance is important nowadays. So if you know a better solution(and you have benchmarks), feel free to submit your version of it.

**Have fun.**
It's a challenge, so it will be frustrating(personally, I do not know how to write a file reading thingy), but let's be proud of what we achieved already.