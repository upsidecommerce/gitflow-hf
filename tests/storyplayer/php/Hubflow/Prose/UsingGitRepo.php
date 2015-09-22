<?php

namespace Hubflow\Prose;

class UsingGitRepo
{
    protected $pathToRepo;

    public function __construct($pathToRepo)
    {
        $this->pathToRepo = $pathToRepo;
    }
}