<?php

function pattern(string $pattern)
{
    return __DIR__ . "/{$pattern}";
}

$patterns = [
    // 'ezSQL/PDO/pdo.php',
    // 'csv/csv.php',
    // 'aria2/aria2.php',
];

foreach ($patterns as $pattern) {
    require pattern($pattern);
}
