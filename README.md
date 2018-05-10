# GraphQL Wrapper

This library aims at providing an Object Oriented Way to execute GraphQL queries using 
`webonyx/graphql-php` without going crazy on unit test where it is being used on your code.

## Requirement

You should install `webonyx/graphql-php` in order to use the wrapper. 

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
composer require malukenho/graphql-wrapper
```

## Example

You don't need to configure anything special in order to use the wrapper, because all the API
from `webonyx/graphql-php` is constructed based on static methods. The wrapper simply calls
the original static API wrapping it an object.

```php
$client = new \Malukenho\GraphQL\GraphQLWrapper();
$client->executeQuery(/*...*/);
```

That provides us a more sane API to work, and it is way more easy to test.
