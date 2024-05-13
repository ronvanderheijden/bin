<?php

declare(strict_types=1);

namespace App;

use function \assert;
use function \function_exists;
use function App\writeln;

if (!function_exists('throw_if')) {
    /**
     * 
     * @param mixed $assertions 
     * @param mixed $description 
     * @return void 
     */
    function throw_if($assertions, $description) {
        try {
            assert(!$assertions, $description);
        } catch (\AssertionError $e) {
            writeln($e->getMessage());
            exit;
        }
    }
}
