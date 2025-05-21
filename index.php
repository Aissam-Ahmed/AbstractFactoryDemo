<?php
require_once __DIR__ . '/factories/DarkThemeFactory.php';
require_once __DIR__ . '/factories/LightThemeFactory.php';
require_once __DIR__ . '/Application.php';

function getUserPreferredTheme(): string {
    return 'dark'; // أو 'light'
}

$theme = getUserPreferredTheme();

if ($theme === 'dark') {
    $factory = new DarkThemeFactory();   
} else {
    $factory = new LightThemeFactory();
}

$app = new Application($factory);
$app->renderUI();
