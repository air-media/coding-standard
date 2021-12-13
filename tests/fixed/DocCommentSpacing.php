<?php

declare(strict_types=1);

namespace Tests;

use RuntimeException;

class DocCommentSpacing
{
    /**
     * @ORM\Id
     * @ORM\Column
     */
    private mixed $int;

    /**
     * Short decription.
     * Long description.
     *
     * @param iterable<string> $items
     *
     * @throws RuntimeException
     */
    public function a(iterable $items): void
    {
    }

    /**
     * @internal
     * @deprecated
     *
     * @param iterable<string> $foo
     * @param array<int>       $bar
     *
     * @psalm-param iterable<string> $foo
     * @psalm-param array<int> $bar
     * @phpstan-param iterable<string> $foo
     * @phpstan-param array<int> $bar
     *
     * @return iterable<string>
     *
     * @psalm-return iterable<string>
     * @phpstan-return iterable<string>
     *
     * @throws RuntimeException
     */
    public function b(iterable $foo, array $bar, bool $flag): iterable
    {
        return $foo;
    }
}
