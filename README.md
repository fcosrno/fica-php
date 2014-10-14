# Fica

PHP class to return Social Security and Medicare amounts from a give number.

## Example
There is a working example in example/index.php

## Installation

	composer install fcosrno/fica-php

## Usage

Instantiate the class passing an amount (in cents). An exception is thrown if the amount is not an integer.

	$fica = new Fica(2000);

Get FICA amount (Social Security plus Medicare).

	$fica->getFica(); // Returns 153 (cents)

Get Social Security amount.

	$fica->getSocialSecurity(); // Returns 124 (cents)

Get Medicare amount.

	$fica->getMedicare(); // Returns 29 (cents)

## Tests
	composer install
	vendor/bin/phpspec run -f pretty