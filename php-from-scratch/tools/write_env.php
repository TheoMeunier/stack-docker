<?php

$envFile = __DIR__ . '/../.env';


if (file_exists($envFile)) {
    $envContent = file_get_contents($envFile);
    $lines = explode("\n", $envContent);

    foreach ($lines as $line) {
        if (empty($line) || $line[0] === '#') {
            continue;
        }

        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $value = trim($value);

            putenv("$name=$value");
            $_ENV[$name] = $value;
        }
    }
} else {
    die("Le fichier .env n'a pas été trouvé.");
}
