<?php

declare(strict_types=1);

namespace Tests;

use SplFileInfo;
use Traversable;

class TypeHints
{
    /**
     * @param iterable<array<string>> $foo
     *
     * @return Traversable<string>
     */
    public function flatten(iterable $foo): Traversable
    {
    }

    public function nullable(string $foo, ?int $bar = null): ?bool
    {
    }

    /**
     * @param array<SplFileInfo> $foo
     *
     * @return array<string>
     */
    public function map(array $foo): array
    {
    }

    public function nullableUnion(?string $param): void
    {
    }

    public function union(string|int $param): string|int
    {
    }
}
