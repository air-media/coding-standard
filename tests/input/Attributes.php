<?php

declare(strict_types=1);

namespace Tests;

#[Attribute1, Attribute2()]
#[Attribute3('param')]
/** Comment */
class Attributes
{
    #[Attribute1, Attribute2(option: false)]
    #[Attribute3()]
    /**
     * @psalm-param mixed $param
     */
    public function call(#[Attribute3]  $param): void
    {
    }
}
