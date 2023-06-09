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
    public function create(Loader $config) : void
    {
        $openai = (array) $config['openai'];

        $openai = array_merge(
            require __DIR__ . '/config/openai.php',
            $openai
        );

        $config['openai'] = $openai;

        $this->container->bind('openai', function () use ($config) {
            return new OpenAIClient([
                'apiKey' => $config["openai"]["apiKey"],
                'organization' => $config["openai"]["organization"],
                'baseUri' => $config["openai"]["baseUri"],
            ]);
        });
    }

    public function run() : void
    {
        $this->container->singleton('openai.completions', function ($prompt, $options = []) {
            return $this->container->make('openai')->completions()->create(array_merge([
                'model' => 'text-davinci-003',
                'prompt' => $prompt
            ], $options));
        });

        $this->container->singleton('openai.models', function () {
            return $this->container->make('openai')->models()->list();
        });
    }
}
