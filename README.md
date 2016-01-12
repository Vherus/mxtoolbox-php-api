# MxToolbox PHP API Wrapper

[![License](https://poser.pugx.org/php-tmdb/api/license.png)](LICENSE.txt)
[![Build Status](https://travis-ci.org/Vherus/mxtoolbox-php-api.svg?branch=master)](https://travis-ci.org/Vherus/mxtoolbox-php-api)

A PHP wrapper for use with the [MxToolbox API](http://mxtoolbox.com/productinfo/mxtoolboxapi).

Influenced by Michael Roterman's TMDB PHP API Wrapper (https://github.com/php-tmdb/api)

This project (currently in early development) aims to provide a PHP wrapper for the MxToolbox API and all it has to offer.


## Getting Started

Start by constructing your MxToolbox client

```php
$apiToken = new \Mxtb\ApiToken('your-api-key');
$mxtb = new \Mxtb\MxToolbox($apiToken);
```
If you want to use the "example.com" test domain provided by MxToolbox during development, pass an empty string to the ApiToken constructor.

The wrapper is set to use HTTPS by default. To force HTTP, pass false as an optional second parameter

```php
$mxtb = new \Mxtb\MxToolbox($apiToken, false);
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Nathan King](mailto:nkvherus@gmail.com)
- [Darien Livermore](mailto:daz.livermore@hotmail.com)


## License

Please see [LICENSE](LICENSE.txt) for more information.
