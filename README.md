# Trustpilot Business Unit API Client

[![Latest Stable Version](https://poser.pugx.org/moneymaxim/trustpilot-business-unit-api/v/stable)](https://packagist.org/packages/moneymaxim/trustpilot-business-unit-api)
[![Total Downloads](https://poser.pugx.org/moneymaxim/trustpilot-business-unit-api/downloads)](https://packagist.org/packages/moneymaxim/trustpilot-business-unit-api)
[![License](https://poser.pugx.org/moneymaxim/trustpilot-business-unit-api/license)](https://packagist.org/packages/moneymaxim/trustpilot-business-unit-api)

A PHP library for accessing the [Trustpilot Business Unit API](https://developers.trustpilot.com/business-unit-api).

This library has been developed and open sourced by [moneymaxim](https://www.moneymaxim.co.uk).

We are currently on the look out for PHP programming talent, so please [get in touch](mailto:andrew.carter@moneymaxim.co.uk) if you are interested.

## Install

Install using [composer](https://getcomposer.org/):

```sh
composer install moneymaxim/trustpilot-business-unit-api
```

## Usage

```php
$client = new Trustpilot\Api\BusinessUnit\Client($apiKey);

// $client->find($domain): array
// $client->get($businessUnitId): array
// $client->getReviews($businessUnitId): array
// $client->getReviews($businessUnitId, ['perPage' => 5, 'page' => 2]): array
```
