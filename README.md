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
If you want to use the "example.com" test domain provided by MxToolbox during development, either pass an empty string to the ApiToken constructor or leave it empty.

The wrapper is set to use HTTPS by default. To force HTTP, pass false as an optional second parameter

```php
$mxtb = new \Mxtb\MxToolbox($apiToken, false);
```

## Using the API

We've tried to keep the usage of this package as intuitive as possible, so you should be able to guess the method to use in most cases.

First, let's create a repository for the API method we want to use (Lookup or Monitor)

```php
$repository = new Mxtb\Repository\Lookup\LookupNetworkRepository($mxtb);
```

Now we can decide which lookup we want to use. For example, if we want to lookup blacklisting for a domain:

```php
$blacklist = $repository->getBlacklist('github.com');

//To see what's contained in the response model, you could do something like below
//echo '<pre>';
//var_dump($blacklist);
```

From here, it should be intuition for the most part. If there is a UID field in the MxToolbox API response JSON, then
you should assume there is a getUid() method on the associated model. For example:

```php
$uid = $blacklist->getUid();
```

## Working example

```php
namespace TestingMxtb;

use Mxtb\ApiToken;
use Mxtb\MxToolbox;
use Mxtb\Repository\Lookup\LookupNetworkRepository;

require '../vendor/autoload.php';

$mxtb = new MxToolbox(new ApiToken(), false);
$repository = new LookupNetworkRepository($mxtb);
$blacklist = $repository->getBlacklist('example.com');

$passed = $blacklist->getPassed();

echo '<pre>';
var_dump($passed);
```

## Filtering the collections

It's possible for you to easily filter the collections you receive (such as Passed, Failed etc.) thanks to the GenericCollection class. The filter method accepts
a custom closure function, but we have included some common filters in the collections themselves. Some examples below:

```php
//Only collect the Passed objects that do not have a null or empty string DelistURL
$passed = $blacklist->getPassed()->delistUrlNotNullOrEmpty();

//Only collect Passed objects that do not have a null DelistURL, but accept empty strings
$passed = $blacklist->getPassed()->delistUrlNotNull();

//Only collect Passed objects where the Name is 'Example Name'
$passed = $blacklist->getPassed()->filter(function($key, $value) {
    if ($value->getName() == 'Example Name')  {
        return true;
    } else {
        return false;
    }
});
```

## Sorting the collections

You can easily sort collections using the same method as PHP's standard [uasort](http://php.net/uasort) function attached to the actual collection

```php
$passed->sort(function($a, $b) {
   if ($a->getId() == $b->getId()) {
       return 0;
   }

   return ($a->getId() < $b->getId()) ? -1 : 1;
}
```

## Request a related lookup

You can quickly send a new request from a related lookup within your RelatedLookup collection. For example:

```php
$related = $blacklist->getRelatedLookups();
$newLookup = $related->get(1)->getLookup($mxtb);

//$newLookup now contains an entirely new result set depending on what the command was in the related
//lookup at index 1 in RelatedLookup collection
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Nathan King](mailto:nkvherus@gmail.com)
- [Darien Livermore](mailto:daz.livermore@hotmail.com)


## License

Please see [LICENSE](LICENSE.txt) for more information.
