<?php

spl_autoload_register(function ($class) {
    // Convert namespace to full file path
    $baseDir = __DIR__ . '/';
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    $fullPath = $baseDir . $classPath;

    if (file_exists($fullPath)) {
        require_once $fullPath;
    }
});
