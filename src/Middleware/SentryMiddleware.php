<?php

declare(strict_types=1);

namespace MarcoPollacci\MezzioSentryDelegator\Middleware;

use Throwable;

class SentryMiddleware
{
    public function __invoke(Throwable $error): void
    {
        \Sentry\captureException($error);
    }
}
