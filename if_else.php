<?php

$a = 5;
$b = 10;
$c = '10';

// TODO: Shorten these two if statements to a single if/else DONE
if ($a < $b) {
    echo "$a is less than $b\n";
}
else ($a >= $b) {
    echo "$a is greater than or equal to $b\n";
}

// TODO: Shorten these two if statements to a single if/else DONE
if ($b < $c) {
    echo "$b is less than $c\n";
}
else ($b >= $c) {
    echo "$b is greater than or equal to $c\n";
}

// TODO:
// combine the next 3 conditionals into one
// if/elseif/else block that checks in order for:
// identical, equal, not equal/identical DONE
if ($b === $c) {
    echo "$b is identical to $c\n";
}
else if ($b == $c) {
    echo "$b is equal to $c\n";
}
else ($b != $c) {
    echo "$b is not equal to $c\n";
}
