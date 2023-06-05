<?php 
namespace Test;

use Bow\Configuration\Loader;
use PHPUnit\Framework\TestCase;
use App\Configurations\OpenAIConfiguration;

class OpenAIConfigurationTest extends TestCase
{
    public function testCreateMethodBindsOpenAIInstanceToContainer()
    {
        $config = new Loader();
        $openAIConfig = new OpenAIConfiguration();
        $openAIConfig->create($config);

        $this->assertInstanceOf(
            'OpenAI\Client',
            $openAIConfig->getContainer()->make('openai.php')
        );
    }

    public function testRunMethodBindsOpenAICompletionsAndModelsToContainer()
    {
        $config = new Loader();
        $openAIConfig = new OpenAIConfiguration();
        $openAIConfig->create($config);
        $openAIConfig->run();

        $this->assertInstanceOf(
            'OpenAI\API\Completions',
            $openAIConfig->getContainer()->make('openai.php.completions')
        );

        $this->assertIsArray(
            $openAIConfig->getContainer()->make('openai.php.models')
        );
    }
}