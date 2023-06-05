# OpenAI Integration for BowPHP

OpenAI Integration is a powerful AI tool for your BowPHP application. It enables you to integrate and leverage OpenAI's language model capabilities in your project.

GitHub license
GitHub issues
CodeFactor
Twitter

## Features

* Seamless integration with OpenAI
* Provides an easy-to-use PHP API for the OpenAI API
*Configurable via BowPHP's configuration system
* Requirements
* PHP 8.1 and above
* Bowphp 5.x
* Steps
* Install
* Configuration
* Usage
* Example
* Maintainers
* License
* Install
* To include this package via Composer, run the following command:

```text
Copy code
composer require bowphp/bow-openai
Once the installation is complete, include the service provider within app/Kernel.php.
````

```php
public function configurations(): array
{
    return [
        ...
        Bow\OpenAI\OpenAIConfiguration::class,
    ];
}
```

### Configuration

Setup the OpenAI integration in openai.php config.

*Available options
*Option Description
*api_key Your OpenAI API key.
*Usage
*You can use the OpenAI service in your application like this:

```php
Copy code
$response = $this->container->get('openai.php')->completions()->create([
    'model' => 'text-davinci-003',
    'prompt' => 'Translate these English words to French: "{words}"',
    'max_tokens' => 60,
]);
````

### Example

```php
Copy code
namespace App\Controllers;

use Bow\Controller\Controller;

class TranslateController extends Controller
{
    public function translate()
    {
        $response = $this->container->get('openai.php')->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Translate these English words to French: "{words}"',
            'max_tokens' => 60,
        ]);

        return $response;
    }
}
```

## Maintainers

*gnakale
*Thank's collaborators
*Contact
*<gnakalehacker@gmail.com> - @gnakalehacker01

Please, if there is a bug in the project, contact me by email or leave me a message on Slack. or join us on Slask

## Contributing

1. Fork it
2. Create your feature branch (git checkout -b my-new-feature)
3. Commit your changes (git commit -am 'Add some feature')
4. Push to the branch (git push origin my-new-feature)
5. Create new Pull Request
6. License

OpenAI Integration for BowPHP is open-sourced software licensed under the MIT license.

1. Fork it
2. Create your feature branch (git checkout -b my-new-feature)
3. Commit your changes (git commit -am 'Add some feature')
4. Push to the branch (git push origin my-new-feature)
1. PHP 8.1 and above

### Install

To include this package via Composer, run the following command:

1. Bowphp 5.x
2. Steps
3. Install
4. Configuration
5. Usage
6. Example
7. Maintainers
8. License

OpenAI Integration for BowPHP is open-sourced software licensed under the MIT license.
### Install

To include this package via Composer, run the following command:

1. Bowphp 5.x
2. Steps
3. Install
4. Configuration
5. Usage
6. Example

## Maintainers

*gnakale
*Thank's collaborators

## License

OpenAI Integration for BowPHP is open-sourced software licensed under the MIT license.

### Contributing

1. Fork it
2. Create your feature branch (git checkout -b my-new-feature)
3. Commit your changes (git commit -am 'Add some feature')
4. Push to the branch (git push origin my-new-feature)
5. Create new Pull Request
### Install

To include this package via Composer, run the following command:

6. License
7. OpenAI Integration for BowPHP is open-sourced software licensed under the MIT license.
