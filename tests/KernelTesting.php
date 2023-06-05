<?php

namespace Test;

use Bow\Configuration\Loader as ConfigurationLoader;
use Bow\View\ViewConfiguration;
use Bow\OpenAI\OpenAIConfiguration;

class KernelTesting extends ConfigurationLoader
{
    public function configurations(): array
    {
        return [
            ViewConfiguration::class,
            OpenAIConfiguration::class,
        ];
    }
}
