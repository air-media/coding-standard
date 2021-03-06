<?php

declare(strict_types=1);

namespace Tests;

use RuntimeException;

class DocCommentSpacing
{
    /**
     * @ORM\Id
     * @var mixed
     * @ORM\Column
     */
    private $int;

    /**
     * Short decription.
     * Long description.
     * @param string[] $items
     * @throws RuntimeException
     */
    public function a(iterable $items): void
    {
    }

    /**
     * @internal
     * @deprecated
     * @param string[] $foo
     * @phpstan-param iterable<string> $foo
     * @psalm-param iterable<string> $foo
     * @param int[] $bar
     * @phpstan-param array<int> $bar
     * @psalm-param array<int> $bar
     * @param bool $flag
     * @return string[]
     * @phpstan-return iterable<string>
     * @psalm-return iterable<string>
     * @throws RuntimeException
     */
    public function b(iterable $foo, array $bar, bool $flag): iterable
    {
        return $foo;
    }
}
