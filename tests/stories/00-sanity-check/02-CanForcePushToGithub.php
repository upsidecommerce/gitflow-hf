<?php

$story = newStoryFor("Hubflow")
         ->inGroup("Initialisation")
         ->called("Can force push test repo to Github");

$story->requiresStoryplayerVersion(2);

$story->addTestSetup(function() {
    usingTestRepo()->unpackLocalRepo();
});

$story->addPreTestInspection(function() {
    expectsTestRepo()->existsLocally();
});

$story->addAction(function() {
    usingTestRepo()->setOrigin();
    usingTestRepo()->forcePushToGithub();
});

