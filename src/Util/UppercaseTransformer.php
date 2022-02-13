<?php

namespace App\Util;

class UppercaseTransformer implements TransformerInterface
{
    public function transform($value)
    {
        return strtoupper($value);
    }
}