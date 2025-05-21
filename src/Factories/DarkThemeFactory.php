<?php
namespace App\Factories;

use App\Interfaces\GUIFactory;
use App\Products\Buttons\DarkButton;
use App\Products\Checkboxes\DarkCheckbox;
use App\Interfaces\Button;
use App\Interfaces\Checkbox;


class DarkThemeFactory implements GUIFactory {
    public function createButton(): Button {
        return new DarkButton();
    }

    public function createCheckbox(): Checkbox {
        return new DarkCheckbox();
    }
}
