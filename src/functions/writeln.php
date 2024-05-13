<?php

declare(strict_types=1);

namespace App;

use function \function_exists;
use function \printf;

if (!function_exists('writeln')) {
    /**
     * 
     * @param string $format 
     * @param mixed $values 
     * @return void 
     */
    function writeln(string $format, ...$values): void
    {
        printf($format, ...$values);
        print(PHP_EOL);
    }
}
