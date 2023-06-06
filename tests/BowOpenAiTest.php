<?php

use Bow\Container\Capsule;
use Bow\Testing\KernelTesting;

class BowOpenAiTest extends PHPUnit\Framework\TestCase
{
    public function testCreateMethodBindsOpenAIInstanceToContainer()
    {
        KernelTesting::withConfiguations([OpenAIConfiguration::class]);
        KernelTesting::configure(__DIR__. "/../src/config");

        // Assert
        $this->assertInstanceOf(
            'OpenAI\Client',
            Capsule::getInstance()->make('openai')
        );
    }

    public function testRunMethodBindsOpenAICompletionsAndModelsToContainer()
    {
        KernelTesting::withConfiguations([OpenAIConfiguration::class]);
        KernelTesting::configure(__DIR__ . "/../src/config");

        // Assert
        $this->assertInstanceOf(
            'OpenAI\API\Completions',
            Capsule::getInstance()->make('openai.completions', ['test-prompt'])
        );

        $this->assertIsArray(
            Capsule::getInstance()->make('openai.models')
        );
    }
}
