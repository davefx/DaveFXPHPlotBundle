DaveFXPHPlotBundle
==================

[@php]:     http://php.net/                 "PHP: Hypertext Preprocessor"
[@phplot]:  http://phplot.sourceforge.net/  "PHPlot - PHPlot is a graph library for charts."
[@symfony]: http://www.symfony.com/         "High Performance PHP Framework for Web Development"

[Symfony2][@symfony] bundle for [PHPlot - Graph library for charts][@phplot].

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

$data = array(
  array('', 1800,   5), array('', 1810,   7), array('', 1820,  10),
  array('', 1830,  13), array('', 1840,  17), array('', 1850,  23),
  array('', 1860,  31), array('', 1870,  39), array('', 1880,  50),
  array('', 1890,  63), array('', 1900,  76), array('', 1910,  92),
  array('', 1920, 106), array('', 1930, 123), array('', 1940, 132),
  array('', 1950, 151), array('', 1960, 179), array('', 1970, 203),
  array('', 1980, 227), array('', 1990, 249), array('', 2000, 281),
);

$plot = new \PHPlot(800,600);

$plot->SetImageBorderType('plain');

$plot->SetPlotType('lines');
$plot->SetDataType('data-data');
$plot->SetDataValues($data);

# Main plot title:
$plot->SetTitle('US Population, in millions');

# Make sure Y axis starts at 0:
$plot->SetPlotAreaWorld(NULL, 0, NULL, NULL);

ob_start();
$plot->DrawGraph();
$str = ob_get_clean();

return new Response($str, 200, array("Content-type: image/png"));

```
