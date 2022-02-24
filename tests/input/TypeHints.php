<?php

declare(strict_types=1);

namespace Tests;

use Traversable;
use SplFileInfo;

class TypeHints
{
    /**
     * @param iterable|string[][] $foo
     *
     * @return Traversable|string[]
     */
    public function flatten(iterable $foo): Traversable
    {
    }

    /**
     * @param string   $foo
     * @param int|null $bar
     *
     * @return bool|null
     */
    public function nullable(string $foo, ? int $bar = null): ? bool
    {
    }

    /**
     * @param SplFileInfo[] $foo
     *
     * @return string[]
     */
    public function map(array $foo): array
    {
    }

    public function nullableUnion(string| null $param): void
    {
    }

    public function union(string | int $param): string |int
    {
    }
}
