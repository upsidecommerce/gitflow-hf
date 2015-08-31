<?php

$story = newStoryFor("Hubflow")
         ->inGroup("Initialisation")
         ->called("Can unpack test repo");

$story->requiresStoryplayerVersion(2);

$story->addAction(function() {
    usingTestRepo()->unpackLocalRepo();
});

$story->addPostTestInspection(function() {
    expectsTestRepo()->existsLocally();
});