<?php

$user_info = [
    'name' => 'Mark',
    'surname' => 'Good',
    'phone' => '555-555-5555',
];

// example 1

$endString1 = str_replace('=', ' - ', http_build_query($user_info, null, ', '));
print_r($endString1 . PHP_EOL);

// example 2
array_walk($user_info, function ($value, $key) use ($user_info) {
    $separator = ', ';

    if ($value == end($user_info)) {
        $separator = '';
    }
    print_r("{$key} - {$value}{$separator}");
});