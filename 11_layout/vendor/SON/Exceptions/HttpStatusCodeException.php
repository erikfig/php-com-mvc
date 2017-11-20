<?php

namespace SON\Exceptions;

abstract class HttpStatusCodeException extends \Exception {
    abstract public function getHeader();
}
