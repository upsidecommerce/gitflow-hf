<?php

namespace Hubflow\Prose;

class UsingHubflow
{
    public function __construct($st, $args)
    {
        $this->pathToRepo = $args[0];
    }

    public function init()
    {
        // what are we doing?
        $log = usingLog()->startAction("{$path}: git hf init");

        // do it
        usingShell()->runCommand("cd {$path} && git hf init");
    }
}