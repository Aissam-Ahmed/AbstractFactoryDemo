<?php

namespace App;

use App\Interfaces\Button;
use App\Interfaces\Checkbox;
use App\Interfaces\GUIFactory;



class Application {
    private Button $button;
    private Checkbox $checkbox;

    public function __construct(GUIFactory $factory) {
        $this->button = $factory->createButton();
        $this->checkbox = $factory->createCheckbox();
    }

    public function renderUI(): void {
        echo $this->button->render() . PHP_EOL;
        echo $this->checkbox->render() . PHP_EOL;
    }
}
