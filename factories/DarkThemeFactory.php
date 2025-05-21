<?php
require_once __DIR__ . '/../interfaces/GUIFactory.php';
require_once __DIR__ . '/../products/buttons/DarkButton.php';
require_once __DIR__ . '/../products/checkboxes/DarkCheckbox.php';

class DarkThemeFactory implements GUIFactory {
    public function createButton(): Button {
        return new DarkButton();
    }

    public function createCheckbox(): Checkbox {
        return new DarkCheckbox();
    }
}
