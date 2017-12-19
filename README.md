# Twig-TruncateP
Truncates a HTML by number of `<p>` tags. This is useful for showing summaries of blog posts where normal truncate functions will not preserve HTML syntax. Since blocks of text should be within paragraph tags, there are no issues of missing HTML tags or HTML tags counting against the letter or word count of the truncated string. Simply specify how many `<p>` tags you would like to see and that's what you'll get.

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

