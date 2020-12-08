# Drupal 9 and Vonage PHP SDK Demo
[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg)](CODE_OF_CONDUCT.md)
[![GPL v2 licensed](https://img.shields.io/badge/license-GPLe%20v2-blue.svg)](./LICENSE.txt)

<img src="https://developer.nexmo.com/assets/images/Vonage_Nexmo.svg" height="48px" alt="Nexmo is now known as Vonage" />

This is a skeleton application for demoing the Vonage Drupal module and Drupal 9.
To use this, you'll need a Vonage account. Sign up [for free at nexmo.com][signup].

**This bundle is currently in development/beta status, so there may be bugs**

 * [Installation](#installation)
 * [Usage](#usage)
 * [Contributing](#contributing) 

## Installation

### Requirements
- PHP 7.3 or higher
- SQLite 3.26 or higher OR MySQL 5.7.8 or higher

To use this demo code, you need to:

1. `$ git clone https://github.com/nexmo-community/vonage-php-sdk-drupal-9.git vonage-and-drupal`
1. `$ cd vonage-and-drupal`
1. `$ composer install`
1. `$ php -S localhost:3000 -t web`

In your browser you can now visit `http://localhost:3000` and begin the Drupal installation process.

## Usage

This application serves as a way to see how to use the Vonage PHP SDK, Vonage Drupal Module, and Drupal 9
together to take advantage of the Vonage APIs. Once you have installed Drupal, you can go to the "Extend"
page and enable both the "Vonage API SDK" and "Vonage Hello World" modules. 

Configuration for Vonage can be found at `http://localhost:3000/admin/config/vonage`.

Sample code for using Vonage in a custom module is located in `web/modules/vonage_hello_world/`.

## Contributing

This project is actively developed, and we love to hear from you! Please feel free to [create an issue][issues] or [open a pull request][pulls] with your questions, comments, suggestions and feedback.

[signup]: https://dashboard.nexmo.com/sign-up?utm_source=DEV_REL&utm_medium=github&utm_campaign=php-symfony-bundle
[issues]: https://github.com/nexmo-community/vonage-php-sdk-drupal-9/issues
[pulls]: https://github.com/nexmo-community/vonage-php-sdk-drupal-9/pulls

