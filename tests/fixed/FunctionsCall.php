<?php

declare(strict_types=1);

namespace Tests;

class FunctionsCall
{
    public function a(string $arg): void
    {
    }

    public function b(string $foo, int $bar, array $options): void
    {
    }

    public function invokeA(): void
    {
        $this->a('foo');
    }

    public function invokeB(): void
    {
        $this->b(
            'Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            42,
            [0, 1, 2]
        );
    }
}
