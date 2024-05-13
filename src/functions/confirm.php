<?php

declare(strict_types=1);

namespace App;

use function \function_exists;
use function \strtolower;
use function App\ask;

if (!function_exists('confirm')) {
    /**
     * 
     * @param string $question 
     * @param bool $default 
     * @return bool 
     */
    function confirm(string $question, bool $default = false): bool
    {
        $answer = ask($question . ' (' . ($default ? 'Y/n' : 'y/N') . ')');
    
        return $answer ? strtolower($answer) === 'y' : $default;
    }
}
