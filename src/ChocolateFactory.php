<?php

namespace Baikov\Chocolate;
use Baikov\Chocolate1\ChocolateBar;
use Baikov\Chocolate1\ChocolateCake;
use Baikov\Chocolate1\ChocolateCookie;
use Baikov\Chocolate\Snack;
use InvalidArgumentException;

class ChocolateFactory
{
    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
    }

    protected function createSnack(string $type): Snack 
    {
        switch ($type) {
            case 'chocolate_bar':
                return new ChocolateBar();
            case 'chocolate_cake':
                return new ChocolateCake();
            case 'chocolate_cookie':
                return new ChocolateCookie();
            default:
                throw new InvalidArgumentException("Неизвестный тип снэка: {$type}");
        }
    }
}

