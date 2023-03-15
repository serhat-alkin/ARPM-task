<?php
 $array = [
    'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
    'red' => ['strawberry', 'cheer', 'tomato'],
    'sweet' => ['sugar', 'cake', 'strawberry'],
];

function countOccurrences($array, $string, &$count) {
    foreach ($array as $item) {
        if (is_array($item)) {
            countOccurrences($item, $string, $count);
        } elseif ($item === $string) {
            $count++;
        }
    }
}

$count = 0;
countOccurrences($array, 'strawberry', $count);
echo "'strawberry' appears $count times in the array.";