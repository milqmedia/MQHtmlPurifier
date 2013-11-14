# MQHtmlPurifier

MQHtmlPurifier is a module that integrates the [HTMLPurifier](http://htmlpurifier.org/) filter library with
[Zend Framework 2](http://framework.zend.com).


## Installation
 1. Add `"repositories": [ { "type": "vcs", "url": "https://github.com/milqmedia/MQHtmlPurifier" }]` to your `composer.json` file.
 2. Add `"milqmedia/mq-htmlpurifier": "dev-master"` to your `composer.json` file and run `php composer.phar update`.
 3. Add `MQHtmlPurifier` to your `config/application.config.php` file under the `modules` key.


## Configuration

MQHtmlPurifier has sane defaults out of the box but offers optional configuration via the `mqhtmlpurifier` configuration key.

    `config` - passed directly to the HTMLPurifier class.
             - Added `Cache.SerializerPath` and set the default cache folder to data/cache/htmlpurifier
               Active by default.
               
## Fork

This module is a fork of [DevmonkHtmlPurifier](https://github.com/DevMonkCom/devmonk-htmlpurifier) by DevMonkCom. Updated, changed and enhanced by Milq Media.