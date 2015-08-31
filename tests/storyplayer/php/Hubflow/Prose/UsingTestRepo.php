<?php

namespace Hubflow\Prose;

use GanbaroDigital\Filesystem\Checks\IsFolder;
use Prose\E5xx_ActionFailed;

class UsingTestRepo
{
    // ==================================================================
    //
    // Filesystem commands
    //
    // ------------------------------------------------------------------

    public function unpackLocalRepo()
    {
        // what are doing?
        $log = usingLog()->startAction("unpack a new copy of the test repo");

        // remove the repo if it already exists
        usingTestRepo()->removeLocalRepo();

        // where is it going?
        $path = fromTestRepo()->getPathToLocalRepo();
        $parentPath = dirname($path);

        // unpack the tarball
        usingShell()->runCommand("cd $parentPath && tar -zxf resources/test-repo.tgz");

        // make sure everything is there
        if (!IsFolder::checkString($path)) {
            throw new E5xx_ActionFailed(__METHOD__, "test repo has not unpacked");
        }

        $log->endAction();
    }

    public function removeLocalRepo()
    {
        // what are we doing?
        $log = usingLog()->startAction("remove the local copy of the test repo");

        // do we have a local repo to remove?
        if (!fromTestRepo()->checkLocalRepoExists()) {
            // nothing to do
            $log->endAction("no local test repo found");
            return;
        }

        // remove the local copy
        $path = fromTestRepo()->getPathToLocalRepo();
        usingShell()->runCommand("rm -rf {$path}");

        // all done
        $log->endAction("removed");
    }

    // ==================================================================
    //
    // Github commands
    //
    // ------------------------------------------------------------------

    public function setOrigin()
    {
        // what are we doing?
        $log = usingLog()->startAction("set 'origin' in the local test repo");

        // where is origin pointing?
        $origin = fromStoryplayer()->get("testrepo.origin");

        // set it
        $path = fromTestRepo()->getPathToLocalRepo();
        usingShell()->runCommand("cd {$path} && git remote add origin {$origin}");

        // all done
        $log->endAction();
    }

    public function forcePushToGithub()
    {
        // what are we doing?
        $log = usingLog()->startAction("force push the test repo up to Github");

        // push it
        $path = fromTestRepo()->getPathToLocalRepo();
        usingShell()->runCommand("cd {$path} && git push --force --all");

        // all done
        $log->endAction();
    }
}