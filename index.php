<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Application;
use App\Factories\DarkThemeFactory;
use App\Factories\LightThemeFactory;




function getUserPreferredTheme(): string {
    return 'dark'; // or 'light'
}

$theme = getUserPreferredTheme();

$factory = ($theme === 'dark') ? new DarkThemeFactory() : new LightThemeFactory();

$app = new Application($factory);
$app->renderUI();
