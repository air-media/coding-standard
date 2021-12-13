<?php

declare(strict_types=1);

namespace Tests;

use function sprintf;

class Functions
{
    public function work(): void
    {
        $this->doWork(
            'Rule SlevomatCodingStandard.Functions.DisallowTrailingCommaInCall',
            'disallows trailing commas in multi-line calls.',
        );
    }

    private function doWork(string $a, string $b): void
    {
        echo sprintf('a=%s, b=%s', $a, $b);
    }
}
