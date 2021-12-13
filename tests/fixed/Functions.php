<?php

declare(strict_types=1);

namespace Tests;

class Functions
{
    public function work(): void
    {
        $this->doWork(
            'Rule SlevomatCodingStandard.Functions.DisallowTrailingCommaInCall',
            'disallows trailing commas in multi-line calls.'
        );
    }

    private function doWork(
        string $ruleDisallowTrailingCommaInCall,
        string $toLongParameterNameForExampleFunction
    ): void {
    }
}
