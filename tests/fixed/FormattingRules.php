<?php

declare(strict_types=1);

namespace Tests;

use DateTimeImmutable;

class FormattingRules extends Foo
{
    public const CONST_A = 1;
    public const CONST_B = 2;
    public const CONST_C = 3;

    /**
     * Description of CONST_D.
     */
    public const CONST_D = 4;

    /**
     * Description of CONST_E.
     */
    public const CONST_E = 5;
    private const CONST_F = 6;
    private const CONST_G = 7;

    private $foo;

    /**
     * @var mixed
     */
    private $bar;

    public function __construct(int $value)
    {
        $this->bar = [];

        parent::__construct();

        $this->foo = $value;
    }

    public function equalTo(self $other): bool
    {
        return $this->foo === $other->foo;
    }

    public function multilineArray(): void
    {
        $arr = [
            'foo',
            'bar',
            'quux',
        ];

        $this->pass($arr);
    }

    public function singlelineArray(): void
    {
        $arr = ['foo', 'bar', 'quux',];

        $this->pass($arr);
    }

    public function singlelineMethod(string $foo, int $bar): void
    {
        $date = new DateTimeImmutable();

        $this->multilineMethod($foo, (string)$bar, $date);
        $this->multilineMethod(
            $foo,
            (string)$bar,
            new DateTimeImmutable()
        );
    }

    public function multilineMethod(
        string $firstArgument,
        string $secondArgument,
        DateTimeImmutable $thirdArgument
    ): void {
        $this->singlelineMethod(
            'Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            42
        );
        $this->singlelineMethod('lorem ipsum', 42);
    }

    private function pass(array $arr): void
    {
    }
}
