<?php
require_once __DIR__ . '/interfaces/GUIFactory.php';

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
