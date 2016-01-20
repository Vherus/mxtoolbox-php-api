# MxToolbox PHP API Wrapper

[![License](https://poser.pugx.org/php-tmdb/api/license.png)](LICENSE.txt)
[![Build Status](https://travis-ci.org/Vherus/mxtoolbox-php-api.svg?branch=master)](https://travis-ci.org/Vherus/mxtoolbox-php-api)

A PHP wrapper for use with the [MxToolbox API](http://mxtoolbox.com/productinfo/mxtoolboxapi).

Influenced by Michael Roterman's TMDB PHP API Wrapper (https://github.com/php-tmdb/api)

Note: There may be some response types missing (Warnings, primarily). This is due to lack of documentation from MxToolbox on the available
properties within those objects. Please let us know if you can shed some light on this.

## Installation

You can install via composer using either

```
composer require mxtoolbox-php/api
```

Or by adding the following to your require block

```
"mxtoolbox-php/api": "~1.2"
```

If you're new to composer, install it via [getcomposer.org](http://getcomposer.org)
Once installed, create a file named `composer.json` in your project root directory and paste the following

```
{
    "require": {
        "mxtoolbox-php/api": "~1.2"
    }
}
```

Then in a terminal (or cmd) in your project root, run `composer install` to download the dependencies.
Next, include composers autoloader so you don't have to require each class

```php
require_once dirname(__DIR__) . '/vendor/autoload.php';
```

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

## Using the API - the Lookup method

We've tried to keep the usage of this package as intuitive as possible, so you should be able to guess the method to use in most cases.

First, let's create a repository for the API method we want to use (Lookup or Monitor)

```php
$repository = new Mxtb\Repository\Lookup\NetworkRepository($mxtb);
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

## Lookup - Request a related lookup

You can quickly send a new request from a related lookup within your RelatedLookup collection. For example:

```php
$related = $blacklist->getRelatedLookups();
$newLookup = $related->get(1)->getLookup($mxtb);

//$newLookup now contains an entirely new result set depending on what the command was in the related
//lookup at index 1 in RelatedLookup collection
```

## Using the API - the Monitor method

Use the Monitor repository to retrieve data on your monitors from within MxToolbox

```php
$repository = new Mxtb\Repository\Monitor\MonitorRepository($mxtb);
```

The MonitorRepository constructor will collect the information on your repositories and store them so you can work with the data safely

```php
$all = $repository->all(); // Returns a collection of all your monitors

$specific = $repository->withUid('some-UID-here'); // If you know a UID
```

## Monitor - Create / Delete

You can create and delete monitors safely within the repository before committing any changes to MxToolbox

```php
$repository->create('dns', 'github.com');

$repository->delete($repository->all()[2]);

$repository->deleteByUid('some-UID-here');
```

If you want to clear the changes you've made, call the clear method

```php
$repository->clear();
```

You can change things as much as you like before saving anything. Once you're happy, simply save the changes you've made

```php
$repository->save();
```

All changes will be saved to your MxToolbox account, the collection in the repository will be reloaded to reflect the changes
and the create / delete queues will be cleared.

You can enforce immediate changes when creating / deleting by passing true as a final parameter. This will execute the
create / delete immediately and will not add anything to the queue. The collection will be reloaded to reflect the changes.

```php
$repository->create('dns', 'github.com', true);
```

If, for any reason, you want to reload the collection of monitors in the repository you can do so with the reload method

```php
$repository->reload();
```

## Monitor - Filters

You can use the same technique as with the lookups to filter the monitors you wish to use

```php
$onlyBlacklists = $repository->all()->withCommand('blacklist');
$onlyWithUid = $repository->all()->withUid('some-UID-here');
```

You can, of course, create your own filters to use. If you create a useful filter, please feel free to request that it be included (with full credit) in this package!

## Filtering the collections

It's possible for you to easily filter the collections you receive (such as Passed, Failed, Monitor etc.) thanks to the GenericCollection class. The filter method accepts
a custom closure, but we have included some common filters in the collections themselves. Some examples below:

```php
//Only collect the Passed objects that do not have a null or empty string DelistURL
$passed = $blacklist->getPassed()->delistUrlNotNullOrEmpty();

//Only collect Passed objects that do not have a null DelistURL, but accept empty strings
$passed = $blacklist->getPassed()->delistUrlNotNull();

//Only collect Passed objects where the Name is 'Example Name'
$passed = $blacklist->getPassed()->filter(function($key, $value) {
    if ($value->getName() == 'Example Name')  {
        return true;
    }
});

// Monitor collections
$onlyBlacklists = $repository->all()->withCommand('blacklist');
$onlyWithUid = $repository->all()->withUid('some-UID-here');
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

## Working example

```php
namespace TestingMxtb;

use Mxtb\ApiToken;
use Mxtb\MxToolbox;
use Mxtb\Repository\Lookup\NetworkRepository;

require dirname(__DIR__) . '/vendor/autoload.php';

$mxtb = new MxToolbox(new ApiToken(), false);
$repository = new NetworkRepository($mxtb);
$blacklist = $repository->getBlacklist('example.com');

$passed = $blacklist->getPassed();

echo '<pre>';
var_dump($passed);
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Nathan King](mailto:nkvherus@gmail.com)
- [Darien Livermore](mailto:daz.livermore@hotmail.com)


## License

Please see [LICENSE](LICENSE.txt) for more information.
