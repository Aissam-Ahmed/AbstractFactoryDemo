<?php

namespace App\Products\Checkboxes;

use App\Interfaces\Checkbox;


class DarkCheckbox implements Checkbox {
    public function render(): string {
        return "Dark Checkbox Rendered";
    }
}
