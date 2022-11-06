<?php

$numbers = [
    [0, 5, 3, 2, 1, 6, 8, 10, 9, 7],
];

foreach ($numbers as $numberCollection) {
    asort($numberCollection);

    print_r(implode(', ', $numberCollection) . PHP_EOL);
}