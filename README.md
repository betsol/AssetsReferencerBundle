# AssetsReferencerBundle

## Description

This bundle will provide you with Twig function, that can be used to reference assets,
i.e. CSS, JavaScript and image files from inside your templates.

You will be able to change base URL of the assets by a single configuration option.

### Features

- Allows you to define assets in your Twig templates in a consistent way
- Provides you with the ability to change base URL of all your assets in one place

## Installation

### Install library with Composer

`composer require betsol/assets-referencer-bundle ~1.0`

### Add bundle to your application's kernel

``` php
// app/AppKernel.php

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            ...
            new Betsol\Bundle\AssetsReferencerBundle\AssetsReferencerBundle,
        );

        ...
    }
}
```

### Introduce bundle configuration to your config file

``` yaml
# app/config/config.yml

assets_referencer:
    base_url: http://static.example.com/
```

## Usage

Use `asset_reference` function in your Twig templates to specify paths for your assets.

```django
{# Favicon #}
<link rel="icon" href="{{ asset_reference('favicon.ico') }}">

{# Stylesheet #}
<link href="{{ asset_reference('css/index.css') }}" rel="stylesheet">

{# JavaScript #}
<script type="text/javascript" src="{{ asset_reference('js/index.js') }}"></script>

{# Image #}
<img src="{{ asset_reference('images/logo.png') }}" alt="Logotype">
```

## API

See the examples above.

## Feedback

If you have found a bug or have another issue with the library - please [create an issue][new-issue]
in this GitHub repository.

If you have a question - file it with [StackOverflow][so-ask] and send a
link to [my E-Mail address][email]. I will be glad to help.

Have any ideas or propositions? Feel free to [contact me][email].

Cheers!

## License

The MIT License (MIT)

Copyright (c) 2014 Better Solutions, Slava Fomin II <s.fomin@betsol.ru>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

[so-ask]: http://stackoverflow.com/questions/ask?tags=php,symfony2
[email]: mailto:s.fomin@betsol.ru
[new-issue]: https://github.com/betsol/AssetsReferencerBundle/issues/new
