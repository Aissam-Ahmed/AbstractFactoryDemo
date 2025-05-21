<?php
require_once __DIR__ . '/../../interfaces/Button.php';

class LightButton implements Button {
    public function render(): string {
        return "Light Button Rendered";
    }
}
