<?php
require_once __DIR__ . '/../../interfaces/Button.php';

class DarkButton implements Button {
    public function render(): string {
        return "Dark Button Rendered";
    }
}
