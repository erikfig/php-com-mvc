<?php

namespace SON\Exceptions;

class NotFoundException extends HttpStatusCodeException {
    protected $code = 404;
    const HEADER = "HTTP/1.0 404 Not Found";

    public function getHeader()
    {
        return NotFoundException::HEADER;
    }
}
