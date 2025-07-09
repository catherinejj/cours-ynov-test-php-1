<?php

use features\bootstrap\UnitaireContext;
use features\bootstrap\End2EndContext;
use Behat\Config\Config;
use Behat\Config\Profile;
use Behat\Config\Suite;

$profile = (new Profile('default'))
    ->withSuite(
        (new Suite('integration'))
            ->withPaths('%paths.base%/features')
            ->withContexts(UnitaireContext::class)
    )
    ->withSuite(
        (new Suite('end2end'))
            ->withPaths('%paths.base%/features')
            ->withContexts(End2EndContext::class)
    );

return (new Config())
    ->withProfile($profile);
