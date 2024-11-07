<?php

namespace App\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class CollectedBy
{
    public function __construct(public string $collectionClass)
    {
    }
}
