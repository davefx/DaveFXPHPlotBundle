DaveFXPHPlotBundle
==================

[@php]:     http://php.net/                 "PHP: Hypertext Preprocessor"
[@phplot]:  http://phplot.sourceforge.net/  "PHPlot - PHPlot is a graph library for charts."
[@symfony]: http://www.symfony.com/         "High Performance PHP Framework for Web Development"

[Symfony2][@symfony] bundle for [PHPlot - Graph library for charts][@nusoap].

Requirements
------------

* [PHP][@php] 5.3.3 and up.
* [Symfony 2][@symfony]

Installation (Composer)
-----------------------

### 0. Install Composer

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

``` bash
curl -s http://getcomposer.org/installer | php
```

### 1. Add the davefx/phplot-bundle package and the phplot repository in your composer.json

```js
{
    "require": {
        "davefx/phplot-bundle": "dev-master"
    },
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "phplot/phplot",
                "version": "6.1.0",
                "dist": {
                    "url": "http://downloads.sourceforge.net/project/phplot/phplot/6.1.0/phplot-6.1.0.zip",
                    "type": "zip"
                },
                "autoload": {
                    "classmap": ["lib/"]
                }
            }
        }
    ],
}
```
Now tell composer to download the bundle by running the command:

```bash
$ php composer.phar update noiselabs/nusoap-bundle
```

Composer will install the bundle to your project's `vendor/noiselabs` directory.

### 2. Enable the bundle

Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new DaveFX\Bundle\PHPlotBundle\DaveFXPHPlotBundle(),
    );
}
```

Usage
-----

```php

$phplot = new \phplot();

...
```
