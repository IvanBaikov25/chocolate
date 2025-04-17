<?php

namespace Baikov\Chocolate;

abstract class Snack
{
    protected string $name;
    protected string $chocolate;
    protected array $toppings;

    public function __construct(string $name, string $chocolate, array $toppings)
    {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Началась создание snack-а {$this->name}\n";
        echo "Добавляется шоколад {$this->chocolate}\n";
        echo "Добавлены начинок: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Snack нужно резать по вертикали.\n";
    }
}
