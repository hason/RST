<?php

namespace Gregwar\RST\Nodes;

class ImageNode extends Node
{
    protected $url;
    protected $options;

    public function __construct($url, array $options = array())
    {
        $this->url = $url;
        $this->options = $options;
    }
}
