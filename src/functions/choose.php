<?php

declare(strict_types=1);

namespace App;

use function \array_key_exists;
use function \array_walk;
use function \function_exists;
use function App\ask;
use function App\writeln;

if (!function_exists('choose')) {
    /**
     * 
     * @param array $options 
     * @return int|false 
     */
    function choose(array $options): int|false
    {
        array_walk($options, fn ($v, $k) => writeln($k . '. ' . $v));

        if (!$answer = (int) ask('Choose (exit)')) {
            return false;
        }

        if (!array_key_exists($answer, $options)) {
            return choose($options);
        }

        return $answer;
    }
}
