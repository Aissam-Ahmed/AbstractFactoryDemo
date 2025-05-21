<?php
require_once __DIR__ . '/../../interfaces/Checkbox.php';

class LightCheckbox implements Checkbox {
    public function render(): string {
        return "Light Checkbox Rendered";
    }
}
