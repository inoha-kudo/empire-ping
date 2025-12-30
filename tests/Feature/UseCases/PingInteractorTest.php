<?php

declare(strict_types=1);

use Empire\Ping\UseCases\PingInteractor;

beforeEach(function () {
    $this->interactor = app(PingInteractor::class);
});

test('handle', function () {
    $this->assertSame(
        'pong',
        $this->interactor->handle(),
    );
});
