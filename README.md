# Airmedia Coding Standard

Ruleset for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).

## Installation

1. Install the package via composer:

```bash
$ composer require --dev airmedia/coding-standard
```

2. Add composer scripts into your `composer.json`:

```
"scripts": {
  "cs-check": "phpcs",
  "cs-fix": "phpcbf"
}
```

3. Create file `phpcs.xml`:

```xml
<?xml version="1.0"?>
<ruleset>
    <arg name="basepath" value="." />
    <arg name="extensions" value="php" />
    <arg name="parallel" value="80" />
    <arg name="cache" value=".phpcs-cache" />
    <arg name="colors" />
    
    <file>src</file>
    <file>tests</file>
    
    <rule ref="Airmedia" />
</ruleset>
```
