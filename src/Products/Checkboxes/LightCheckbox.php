<?php


namespace App\Products\Checkboxs;

use App\Interfaces\Checkbox;


class LightCheckbox implements Checkbox {
    public function render(): string {
        return "Light Checkbox Rendered";
    }
}
