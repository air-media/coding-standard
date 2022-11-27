<?php

declare(strict_types=1);

class PropertyDeclaration
{
    private ?int $tooManySpaces;
    private readonly string|int $prop;

    public function __construct(public readonly bool $enabled)
    {
    }
}
