<?php
namespace HuluBalang;

class Lembing
{
    private $config;

    public function __construct(array $config = [])
    {
        if (!isset($config['handler'])) {
            $config['handler'] = "Purrr";
        }
    }

    public function send($meow)
    {
        return $meow;
    }
}
