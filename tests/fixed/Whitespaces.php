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

    public function match(): void
    {
        match (true) {
            $a => 'a',
            $aa => 'aa',
            $aaa => 'aaa',
        };
    }
}
