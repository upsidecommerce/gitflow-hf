<?php

use Hubflow\Prose\ExpectsTestRepo;
use Hubflow\Prose\FromTestRepo;
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

/**
 * @return UsingTestRepo
 */
function usingTestRepo()
{
    return new UsingTestRepo();
}