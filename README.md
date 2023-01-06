# Seo plugin for WinterCMS

### Features
* Adding code to the header
* Adding code to the footer

### Language support
* English
* Russian

### Supported versions
Please check: https://www.php.net/supported-versions.php
* PHP 8.0
* PHP 8.1
* PHP 8.2

### Installation
```bash
composer require dimsog/wn-seo-plugin
```

### How to use
layouts/default.htm
```html
[seo]
==
<!DOCTYPE html>
<html>
<head>
    {% placeholder header %}
</head>
<body>
{% placeholder footer %}
</body>
</html>
```
