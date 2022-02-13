<?php

namespace App\Util;

use Psr\Log\LoggerInterface;

class Rot13Transformer
{
    private $logger;

    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function transform($value)
    {
        $this->logger->info('Transforming'.$value);
        // ..
    }
}