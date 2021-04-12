<?php

declare(strict_types=1);

namespace Tests;
use \DateInterval;
use DateTimeZone;
use Tests\TestCase;
use DateTimeImmutable;
use function strrev;
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
