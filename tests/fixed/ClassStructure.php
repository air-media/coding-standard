<?php

declare(strict_types=1);

namespace Tests;

use function strtoupper;

abstract class ClassStructure
{
    public const CONST_C = 3;
    protected const CONST_B = 2;
    private const CONST_A = 1;

    public $foo;
    protected $bar;
    private $value;

    abstract protected static function generateInitialValue(): string;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function create(): self
    {
        return new static(static::generateInitialValue());
    }

    public function __invoke(): void
    {
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    protected function postInvoke(): void
    {
    }

    private function toString(): string
    {
        return self::toUpperCase($this->value);
    }

    private static function toUpperCase(string $value): string
    {
        return strtoupper($value);
    }
}
