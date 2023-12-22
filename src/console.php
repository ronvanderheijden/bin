#!/usr/local/bin/php
<?php

declare(strict_types=1);

require_once "./vendor/autoload.php";

use function App\ask;
use function App\choose;
use function App\confirm;
use function App\throw_if;
use function App\quote;
use function App\writeln;

unset($argv[0]);

if (count($argv) < 1) {
    writeln("Usage: console <required> [optional]");
    exit;
}

$required = $argv[1];

while ($answer = choose([
    1 => 'Send a message to Ron',
])) {
    switch ($answer) {
        case 1: // Foo
            $message = ask("Type a message for Ron");

            throw_if(empty($message), 'No message typed');

            confirm("Send: $message") || exit;

            quote("Hi Ron! $message");
        break;
    }
}
