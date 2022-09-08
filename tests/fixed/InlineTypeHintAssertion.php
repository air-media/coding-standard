<?php

declare(strict_types=1);

namespace Tests;

use function assert;
use function is_int;
use function is_resource;
use function is_string;

/**
 * @psalm-type PsalmType = array<string, string>
 */
class InlineTypeHintAssertion
{
    public function do(): void
    {
        $type = $this->expression();
        assert($type instanceof Type);

        $union = $this->expression();
        assert($union instanceof Type1 || $union instanceof Type2);

        $intersection = $this->expression();
        assert($intersection instanceof Type1 && $intersection instanceof Type2);

        $nullable = $this->expression();
        assert($nullable instanceof Type || $nullable === null);

        $scalar = $this->expression();
        assert(is_string($scalar) || is_int($scalar) || is_resource($scalar) || $scalar === null);

        /** @psalm-var PsalmType $psalmType */
        $psalmType = $this->expression();
    }

    public function expression(): mixed
    {
    }
}
