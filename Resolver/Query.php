<?php

namespace React\Dns\Resolver;

class Query
{
    public $name;
    public $type;
    public $class;

    public function __construct($name, $type, $class)
    {
        $this->name = $name;
        $this->type = $type;
        $this->class = $class;
    }
}