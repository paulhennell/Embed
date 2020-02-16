<?php

namespace Embed\Http;

use Exception;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Http\Message\RequestInterface;

final class NetworkException extends Exception implements NetworkExceptionInterface
{
    private RequestInterface $request;

    public function __construct(string $message, int $code, RequestInterface $request)
    {
        $this->request = $request;
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }
}
