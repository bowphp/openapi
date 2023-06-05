<?php 

public function testCreateMethodBindsOpenAIInstanceToContainer()
{
    // Arrange
    $config = new Loader();
    $openAIConfig = new OpenAIConfiguration();
    $config['openai'] = [
        'apiKey' => 'test-api-key',
        'organization' => 'test-organization',
        'baseUri' => 'https://api.openai.com',
    ];

    // Act
    $openAIConfig->create($config);

    // Assert
    $this->assertInstanceOf(
        'OpenAI\Client',
        $openAIConfig->getContainer()->make('openai')
    );
}

public function testRunMethodBindsOpenAICompletionsAndModelsToContainer()
{
    // Arrange
    $config = new Loader();
    $openAIConfig = new OpenAIConfiguration();
    $config['openai'] = [
        'apiKey' => 'test-api-key',
        'organization' => 'test-organization',
        'baseUri' => 'https://api.openai.com',
    ];
    $openAIConfig->create($config);

    // Act
    $openAIConfig->run();

    // Assert
    $this->assertInstanceOf(
        'OpenAI\API\Completions',
        $openAIConfig->getContainer()->make('openai.completions', ['test-prompt'])
    );

    $this->assertIsArray(
        $openAIConfig->getContainer()->make('openai.models')
    );
}