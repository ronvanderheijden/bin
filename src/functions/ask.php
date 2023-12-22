<?php

declare(strict_types=1);

namespace App;

use function \function_exists;
use function \readline;

if (!function_exists('ask')) {
    /**
     * 
     * @param string $question 
     * @param string $default 
     * @return string 
     */
    function ask(string $question, string $default = ''): string
    {
        return readline($question . ($default ? " ({$default})" : null) . ': ') ?: $default;
    }
}
