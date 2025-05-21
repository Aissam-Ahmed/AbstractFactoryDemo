<?php

namespace App\Products\Buttons;

use App\Interfaces\Button;

class DarkButton implements Button {
    public function render(): string {
        return "Dark Button Rendered";
    }
}
