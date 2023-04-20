<?php

declare(strict_types=1);

namespace Tests;

/** Comment */
#[Attribute1]
#[Attribute2()]
#[Attribute3('param')]
class Attributes
{
    /**
     * @psalm-param mixed $param
     */
    #[Attribute1]
    #[Attribute2(option: false)]
    #[Attribute3()]
    public function call(#[Attribute3] $param): void
    {
    }
}
