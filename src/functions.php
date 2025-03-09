<?php

namespace findSingle;

function findSingle(array $input): array
{
    $counts = [];
    foreach ($input as $number) {
        $found = false;
        foreach ($counts as $key => $value) {
            if (bccomp((string)$key, (string)$number, 5) === 0) {
                $counts[$key]++;
                $found = true;
                break;
            }
        }
        if (!$found) {
            $counts[(string)$number] = 1;
        }
    }
    return array_map('floatval', array_keys(array_filter($counts, function($count) {
        return $count === 1;
    })));
}