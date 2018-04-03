<?php
declare(strict_types=1);

namespace php;

/**
 * Returns the length of the given `$string`.
 * Returns zero for `null`.
 *
 * @param string|null $string
 *
 * @return int
 * @author Jens Hausdorf <jenshausdorf@gmail.com>
 */
function strlen(?string $string): int
{
    // php returns `strlen(null) === 0`. Why?
    if (null === $string) {
        // early exit, the loop would be an infinite loop because of the strict compare
        return 0;
    }

    $i = 0;

    // The real php would not need to scan through each character, it simply knows a long a string is.
    // The stfu operator prevents issueing a warning `Uninitialized string offset: %d`.
    // It basically checks whether the character in the string at the position `$i` is not undefined.
    while (@$string{$i} !== '') {
        ++$i;
    }

    return $i;
}
