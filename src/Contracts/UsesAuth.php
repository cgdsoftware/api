<?php

namespace LaravelEnso\Api\Contracts;

interface UsesAuth
{
    public function tokenProvider(): Token;

    public function type(): string;
}
