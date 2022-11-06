<?php

$numbers = [
    [1, 58, 23, 45, 3, 52, 100, 45]
];

foreach ($numbers as $numberCollection) {
    sort($numberCollection);

    $numberCollection = array_filter($numberCollection, function ($value, $key) use ($numberCollection) {
        var_dump($key);
        if ($key !== 0) {
            return $value !== $numberCollection[$key - 1];
        }

        return $value;
    }, 1);

    print_r(implode(' ', $numberCollection) . PHP_EOL);
}