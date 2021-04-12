<?php

declare(strict_types=1);

namespace Tests;

use RuntimeException;

class DocCommentSpacing
{
    /**
     * @ORM\Id
     * @ORM\Column
     *
     * @var mixed
     */
    private $int;

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
     * @param iterable<int>    $bar
     *
     * @return iterable<string>
     *
     * @throws RuntimeException
     *
     * @phpstan-param iterable<string> $foo
     * @psalm-param iterable<string> $foo
     * @phpstan-param iterable<string> $bar
     * @psalm-param iterable<string> $bar
     * @phpstan-return iterable<string>
     * @psalm-return iterable<string>
     */
    public function b(iterable $foo, iterable $bar, bool $flag): iterable
    {
        return $foo;
    }
}