<?php

declare(strict_types=1);

namespace Tests;

class Whitespaces
{
    public function assign(): void
    {
        $a = 'foo';
        $b = 'bar';

        echo 'a = ' . $a;
        echo 'b = ' . $b;
    }

    /**
     * @param list<int>     $a
     * @param array<string> $aa
     */
    public function match(array $a, array $aa): void
    {
        match (true) {
            $a => 'a',
            $aa => 'aa',
            $aaa => 'aaa',
        };
    }
}
