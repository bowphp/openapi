<?php 

namespace App\Configurations;

use Bow\Configuration\Loader;
use Bow\Configuration\Configuration;
use OpenAI\Client as OpenAIClient;

class OpenAIConfiguration extends Configuration
{
    /**
     * Initialize the package
     *
     * @return void
     */
    public function create(Loader $config)
    {
        $this->container->bind('openai', function () {
            $apiKey = getenv('YOUR_API_KEY');
            return OpenAIClient::client($apiKey);
        });
    }
}

public function run()
{
    $this->container->add('openai.php.completions', function ($prompt, $options = []) {
        return $this->container->make('openai.php')->completions()->create(array_merge([
            'model' => 'text-davinci-003',
            'prompt' => $prompt
        ], $options));
    });

    $this->container->add('openai.models', function () {
        return $this->container->make('openai')->models()->list();
    });
}

