<?php

declare(strict_types=1);

class PropertyDeclaration
{
    private  ? int  $tooManySpaces;
    readonly  private string |int $prop;

    public function __construct(
        readonly public  bool  $enabled
    )
    {
    }
}
