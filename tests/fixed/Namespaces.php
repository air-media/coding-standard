<?php

declare(strict_types=1);

namespace Tests;

use DateInterval;
use DateTimeImmutable;
use DateTimeZone;
use function strrev;
use function time;
use const DATE_RFC3339;

class Namespaces extends TestCase
{
    public function test(): void
    {
        strrev(
            (new DateTimeImmutable('@' . time(), new DateTimeZone('UTC')))
                ->sub(new DateInterval('P1D'))
                ->format(DATE_RFC3339)
        );
    }
}
