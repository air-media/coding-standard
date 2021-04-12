<?php

declare(strict_types=1);

namespace Tests;

use function strtoupper;

abstract class ClassStructure
{
    private $value;
    public $foo;
    protected $bar;

    private const CONST_A = 1;
    protected const CONST_B = 2;
    public const CONST_C = 3;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __invoke(): void
    {
    }

    protected function postInvoke(): void
    {
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    private function toString(): string
    {
        return self::toUpperCase($this->value);
    }

    public static function create(): self
    {
        return new static(static::generateInitialValue());
    }

    private static function toUpperCase(string $value): string
    {
        return strtoupper($value);
    }

    abstract protected static function generateInitialValue(): string;
}
