<?php

declare(strict_types=1);

namespace Tests;

class EarlyExit
{
    public function bar(): bool
    {
        return $bar === 'bar';
    }

    public function foo(): ?string
    {
        foreach ($itens as $item) {
            if (!$item->isItem()) {
                return 'There is an item that is not an item';
            }

            continue;
        }

        return null;
    }

    public function baz(): string
    {
        if ($number > 0) {
            return 'Number is grater then 0';
        }

        exit;
    }

    public function quoox(): bool
    {
        if (true !== 'true') {
            return false;
        }

        return false === false;
    }
}
