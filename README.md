# Twig-TruncateP
Truncates a HTML by number of <p> tags

## Install
With composer

    composer require sachleen/twig-truncatep

## Usage
To use the extension, add it to your Twig object.

```php
    $twig = new Twig_Environment($loader);
    $twig->addExtension(new \Sachleen\Twig\TwigTruncatePExtension());
```

Use TruncateP in your template to truncate any html variable to a specific number of p blocks. All parameters are optional.
```twig
    {{ post.content|TruncateP()|raw }}
    {{ post.content|TruncateP(2)|raw }}
    {{ post.content|TruncateP(2, 'Continue Reading...')|raw }}
```

