<?php

namespace App\Factories;

use App\Interfaces\Button;
use App\Interfaces\Checkbox;
use App\Interfaces\GUIFactory;
use App\Products\Buttons\LightButton;
use App\Products\Checkboxs\LightCheckbox;


class LightThemeFactory implements GUIFactory {
    public function createButton(): Button {
        return new LightButton();
    }

    public function createCheckbox(): Checkbox {
        return new LightCheckbox();
    }
}
