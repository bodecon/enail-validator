<?php

declare(strict_types=1);

namespace Kirillov\EmailValidator\Validator;

use Kirillov\EmailValidator\Storage\HostsStorage;

class EmailValidator
{
    public function __construct (
        private HostsStorage $hostsStorage
    ) { }

    public function isValid(string $email): bool
    {
        if (empty($email)) {
            throw new InvalidArgumentException('Email is empty.');
        }

        $host = explode('@', $email)[1];
        $validHosts = $this->hostsStorage->getAll();

        return filter_var($email, FILTER_VALIDATE_EMAIL) && getmxrr($host,$validHosts);
    }
}
