<?php

use Hubflow\Prose\ExpectsTestRepo;
use Hubflow\Prose\FromTestRepo;
use Hubflow\Prose\UsingHubflow;
use Hubflow\Prose\UsingTestRepo;

/**
 * @return ExpectsTestRepo
 */
function expectsTestRepo()
{
    return new ExpectsTestRepo();
}

/**
 * @return FromTestRepo
 */
function fromTestRepo()
{
    return new FromTestRepo();
}

function usingHubflow($pathToRepo)
{
    return new UsingHubflow($pathToRepo);
}

/**
 * @return UsingTestRepo
 */
function usingTestRepo()
{
    return new UsingTestRepo();
}