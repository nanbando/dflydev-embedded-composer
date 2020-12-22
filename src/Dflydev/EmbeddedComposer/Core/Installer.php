<?php

namespace Dflydev\EmbeddedComposer\Core;

use Composer\Repository\PlatformRepository;

class Installer extends \Composer\Installer
{
    protected function createRepositorySet($forUpdate, PlatformRepository $platformRepo, array $rootAliases = array(), $lockedRepository = null)
    {
        $repositorySet = parent::createRepositorySet($forUpdate, $platformRepo, $rootAliases, $lockedRepository);
        $repositorySet->allowInstalledRepositories();

        return $repositorySet;
    }
}
