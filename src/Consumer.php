<?php

namespace Core\Contracts;

interface Consumer
{
    /**
     * @param callable $callback
     * @return mixed
     */
    public function consume(callable $callback);
}