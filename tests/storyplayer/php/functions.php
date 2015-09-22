<?php

use Hubflow\Prose\ExpectsGitRepo;
use Hubflow\Prose\ExpectsTestRepo;
use Hubflow\Prose\FromGitRepo;
use Hubflow\Prose\FromTestRepo;
use Hubflow\Prose\UsingGitRepo;
use Hubflow\Prose\UsingHubflow;
use Hubflow\Prose\UsingTestRepo;

/**
 * @param  string $pathToRepo
 *         the path to the git repo
 * @return ExpectsGitRepo
 */
function expectsGitRepo($pathToRepo)
{
    return new ExpectsGitRepo($pathToRepo);
}

/**
 * @return ExpectsTestRepo
 */
function expectsTestRepo()
{
    return new ExpectsTestRepo();
}

/**
 * @param  string $pathToRepo
 *         the path to the git repo
 * @return FromGitRepo
 */
function fromGitRepo($pathToRepo)
{
    return new FromGitRepo($pathToRepo);
}

/**
 * @return FromTestRepo
 */
function fromTestRepo()
{
    return new FromTestRepo();
}

/**
 * @param  string $pathToRepo
 *         the path to the git repo
 * @return UsingGitRepo
 */
function usingGitRepo($pathToRepo)
{
    return new UsingGitRepo($pathToRepo);
}

/**
 * @param  string $pathToRepo
 *         the path to the git repo
 * @return UsingHubflow
 */
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