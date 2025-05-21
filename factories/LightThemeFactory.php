<?php
require_once __DIR__ . '/../interfaces/GUIFactory.php';
require_once __DIR__ . '/../products/buttons/LightButton.php';
require_once __DIR__ . '/../products/checkboxes/LightCheckbox.php';

class LightThemeFactory implements GUIFactory {
    public function createButton(): Button {
        return new LightButton();
    }

    public function createCheckbox(): Checkbox {
        return new LightCheckbox();
    }
}
