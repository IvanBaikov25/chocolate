<?php

namespace ChocolateFactory;

class ChocolateFactory
{
    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);
        if ($snack) {
            $snack->prepare();
            $snack->cut();
        } else {
            echo "Снэк типа {$type} не найден.\n";
        }
    }

    private function createSnack(string $type): ?Snack
    {
        return match ($type) {
            'bar' => new ChocolateBar(),
            'truffle' => new ChocolateTruffle(),
            'cookie' => new ChocolateChipCookie(),
            default => null,
        };
    }
}
