<?php

namespace Hubflow\Prose;

use GanbaroDigital\Filesystem\Checks\IsFolder;
use Prose\E5xx_ActionFailed;

class FromTestRepo
{
    public function getPathToLocalRepo()
    {
        // what are we doing?
        $log = usingLog()->startAction("get the path to the local test repo");

        // the path is stored as a setting in the storyplayer.json config file
        $path = fromStoryplayer()->get("testrepo.path");

        // all done
        $log->endAction($path);
        return $path;
    }

    public function checkLocalRepoExists()
    {
        // what are we doing?
        $log = usingLog()->startAction("does the local test repo exist?");

        // does it?
        $path = fromTestRepo()->getPathToLocalRepo();
        $retval = IsGitRepo::check($path);

        // all done
        if ($retval) {
            $log->endAction("yes");
        }
        else {
            $log->endAction("no");
        }

        return $retval;
    }
}