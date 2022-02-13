<?php

namespace App\Service;

use App\Util\TransformerInterface;

class TwitterClient
{
    private $transformer;

    public function __construct(TransformerInterface $transformer)
    {
        $this->transformer = $transformer;
    }

    public function tweet($user, $key, $status)
    {
        $transformedStatus = $this->transformer->transform($status);

        // .... connect to Twitter and send the encoded status
    }
}