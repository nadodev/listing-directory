<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Real Estate Management System

## About Application

This is a web system developed in Laravel 10 for real estate management. It allows the registration, visualization, and administration of properties, as well as providing subscription functionalities with payment integration through Stripe.

## Features

- Property registration with detailed information.
- Admin area to manage properties, users, and subscriptions.
- Integration with Stripe for payment processing.
- Differentiation between admin and regular user areas.

## Requirements

- PHP 8.3
- Laravel 10
- MySQL
- Stripe API Keys (for payment integration)

## Installation

1. Clone this repository.
2. Install dependencies using `composer install`.
3. Configure the `.env` file with the database credentials and Stripe API keys.
4. Run database migrations using `php artisan migrate`.
5. Start the local server using `php artisan serve`.

## Stripe Configuration

To use Stripe integration, you need to set up the API keys in the `.env` file. You can obtain your API keys from the Stripe dashboard.

```yaml 
STRIPE_KEY=sua_chave_publica_do_stripe
STRIPE_SECRET=sua_chave_secreta_do_stripe
```


## Usage

- Access the admin area at `/admin` to manage properties, users, and subscriptions.
- Users can register, view, and manage their properties in the user area.

## Contribution

Contributions are welcome! Feel free to send pull requests or open issues for enhancements, bug fixes, etc.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
