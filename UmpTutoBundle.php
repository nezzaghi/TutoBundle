<?php

namespace Ump\TutoBundle;

use Claroline\CoreBundle\Library\pluginBundle;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;

class UmpTutoBundle extends PluginBundle
{
    public function getConfiguration($environment)
    {
        $config = new ConfigurationBuilder();
        return $config->addRoutingResource(__DIR__.'/Resources/config/routing.yml',null,'ump');
    }
    public function hasMigrations()
    {
        return true;
    }
}

