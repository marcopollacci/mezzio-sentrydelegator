<?php

declare(strict_types=1);

namespace MarcoPollacci\MezzioSentryDelegator\Middleware;

use Psr\Container\ContainerInterface;

class SentryMiddlewareFactory
{
    public function __invoke(ContainerInterface $container) : SentryMiddleware
    {
        return new SentryMiddleware();
    }
}
