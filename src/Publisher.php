<?php


namespace Core\Contracts;


interface Publisher
{
    /**
     * @param string $str_message
     * @return mixed
     */
    public function publish(string $str_message);
}