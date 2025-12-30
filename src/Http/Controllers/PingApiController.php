<?php

declare(strict_types=1);

namespace Empire\Ping\Http\Controllers;

use Empire\Ping\UseCases\PingUseCase;
use Illuminate\Http\Response;

final readonly class PingApiController
{
    public function __invoke(PingUseCase $interactor): Response
    {
        return response($interactor->handle())
            ->header('Content-Type', 'text/plain');
    }
}
