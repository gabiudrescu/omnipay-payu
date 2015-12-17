# Omnipay: PayU Intl

**PayU Intl driver for the Omnipay payment processing library**

[![Latest Stable Version](https://poser.pugx.org/omnipay/payu/version.png)](https://packagist.org/packages/omnipay/payu)
[![Total Downloads](https://poser.pugx.org/omnipay/payu/d/total.png)](https://packagist.org/packages/omnipay/payu)

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package trying to implement PayU Romania support for Omnipay.

I forked from this version from https://github.com/efesaid/omnipay-payu improving it together with [@sky-hub](https://github.com/sky-hub) so we can use
with PayU Romania.

It seems PayU Romania and Turkey use the same backend, with small modifications, with country specific.

This is an unofficial version of PayU Intl Integration, aiming to offer support mainly for PayU Romania. Our secondary 
goal is to support Turkey and other similar-platform PayU countries.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "omnipay/payu-intl": "~2.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update


For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/thephpleague/omnipay-payu/issues),
or better yet, fork the library and submit a pull request.
