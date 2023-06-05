

## OpenAI Integration for BowPHP

**OpenAI Integration is a powerful AI tool for your BowPHP application. It enables you to integrate and leverage OpenAI's language model capabilities in your project.**

Features

1. [ ] Seamless integration with OpenAI
2. [ ] Provides an easy-to-use PHP API for the OpenAI API
3. [ ] Configurable via BowPHP's configuration system
4. [ ] Requirements

PHP 8.1 and above
Bowphp 5.x
Installation

To include this package via Composer, run the following command:

```bash
Copy code
`composer require bowphp/bow-openai`
Once the installation is complete, include the service provider within app/Kernel.php.
```

```php
Copy code
public function configurations(): array
{
    return [
        ...
        App\Configurations\OpenAIConfiguration::class,
    ];
}````

# Configuration

**Setup the OpenAI integration in config/openai.php config.**

Available options
Option	Description
api_key	Your OpenAI API key.
Usage

You can use the OpenAI service in your application like this:

```php
Copy code
$response = $this->container->make('openai.completions', [
    'Translate these English words to French: "{words}"',
    [
        'max_tokens' => 60,
    ]
]);
```
## Example

```php
Copy code
namespace App\Controllers;

use Bow\Controller\Controller;

class TranslateController extends Controller
{
    public function translate()
    {
        $response = $this->container->make('openai.completions', [
            'Translate these English words to French: "{words}"',
            [
                'max_tokens' => 60,
            ]
        ]);

        return $response;
    }
}```

# Maintainers

*gnakale

Thank's collaborators

Contact

* gnakalehacker@gmail.com - @gnakalehacker01

1. [ ] Please, if there is a bug in the project, contact me by email or leave me a message on Slack. or join us on Slack
Contributing


* **Contributing**
* Fork it
* Create your feature branch (git checkout -b my-new-feature)
* Commit your changes (git commit -am 'Add some feature')
* Push to the branch (git push origin my-new-feature)
* Create new Pull Request
* License

* OpenAI Integration for BowPHP is open-sourced software licensed under the MIT license.