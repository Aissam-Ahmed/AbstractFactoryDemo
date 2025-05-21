<?php
require_once __DIR__ . '/../../interfaces/Checkbox.php';

class DarkCheckbox implements Checkbox {
    public function render(): string {
        return "Dark Checkbox Rendered";
    }
}
