<?php


namespace App\Products\Buttons;

use App\Interfaces\Button;


class LightButton implements Button {
    public function render(): string {
        return "Light Button Rendered";
    }
}
