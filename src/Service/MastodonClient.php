<?php

namespace App\Service;

use App\Util\TransformerInterface;

class MastodonClient
{
    private $transformer;

    public function __construct(TransformerInterface $shoutyTransformer)
    {
        $this->transformer = $shoutyTransformer;
    }

    public function toot($user, $key, $status)
    {
        $transformedStatus = $this->transformer->transform($status);

        // ... connect to Mastodon and send the transformed status
    }
}