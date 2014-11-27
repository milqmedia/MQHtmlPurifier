# mq-htmlpurifier

mq-htmlpurifier is a module that integrates the [mq-htmlpurifier](http://htmlpurifier.org/) filter library with
[Zend Framework 2](http://framework.zend.com).


## Installation
 1. Add `"milqmedia/htmlpurifier": "dev-master"` to your `composer.json` file and run `php composer.phar update`.
 2. Add `mq-htmlpurifier` to your `config/application.config.php` file under the `modules` key.


## Configuration

MQHtmlPurifier has sane defaults out of the box but offers optional configuration via the `mqhtmlpurifier` configuration key.

    `config` - passed directly to the HTMLPurifier class.
             - Added `Cache.SerializerPath` and set the default cache folder to data/cache/htmlpurifier
               Active by default.
               
## Fork

This module is a fork of [DevmonkHtmlPurifier](https://github.com/DevMonkCom/devmonk-htmlpurifier) by DevMonkCom. Updated, changed and enhanced by Milq Media.
