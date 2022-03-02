<?php

declare(strict_types=1);

namespace Kirillov\EmailValidator\Validator;

use Kirillov\EmailValidator\Storage\HostsStorage;
use InvalidArgumentException;

class EmailValidator
{
    public function __construct (
        private HostsStorage $hostsStorage
    ) { }

    /**
     * @param string $email
     * @return bool
     *
     * @throws
     */
    public function isValid(string $email): bool
    {
        if (empty($email)) {
            throw new InvalidArgumentException('Email is empty.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Email is invalid.');
        }

        $host = explode('@', $email)[1];
        $validHosts = $this->hostsStorage->getAll();

        return in_array($host,$validHosts);
    }
}
