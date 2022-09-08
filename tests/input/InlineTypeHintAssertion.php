<?php

declare(strict_types=1);

namespace Tests;

/**
 * @psalm-type PsalmType = array<string, string>
 */
class InlineTypeHintAssertion
{
    public function do(): void
    {
        /** @var Type $type */
        $type = $this->expression();

        /** @var Type1|Type2 $union */
        $union = $this->expression();

        /** @var Type1&Type2 $intersection */
        $intersection = $this->expression();

        /** @var Type|null $nullable */
        $nullable = $this->expression();

        /** @var string|int|resource|null $scalar */
        $scalar = $this->expression();

        /** @psalm-var PsalmType $psalmType */
        $psalmType = $this->expression();
    }

    public function expression(): mixed
    {
    }
}
