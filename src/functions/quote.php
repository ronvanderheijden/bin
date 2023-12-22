<?php

declare(strict_types=1);

namespace App;

use function \function_exists;

if (!function_exists('quote')) {
    /**
     * 
     * @param null|string $line 
     * @return void 
     */
    function quote(?string $line = ''): void
    {
        print(PHP_EOL . '> ' . $line . PHP_EOL . PHP_EOL);
    }
}
