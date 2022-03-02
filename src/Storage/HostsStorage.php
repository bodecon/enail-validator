<?php

declare(strict_types=1);

namespace Kirillov\EmailValidator\Storage;

class HostsStorage
{
    private static array $validHosts = [];

    public function getAll(): array
    {
        return self::$validHosts;
    }

    public function set(array $hosts): void
    {
        self::$validHosts = $hosts;
    }
}

