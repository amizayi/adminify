<?php

return Illuminate\Foundation\Application::configure(basePath: dirname(__DIR__))
    ->withRouting()
    ->withMiddleware()
    ->withExceptions()
    ->create();
