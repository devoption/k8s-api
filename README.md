# Kubernetes API Client for Laravel

This package provides a simple way to interact with the Kubernetes API from a Laravel application.

## Installation

To get started, you can install the package via composer:

```bash
composer require devoptn/k8s-api
```

(Optional) Next, you need to publish the configuration file:

```bash
php artisan vendor:publish --provider="DevOption\Kubernetes\KubernetesServiceProvider"
```

> **Note:** The configuration file is optional. If you don't publish it, the package will use the default values.

## Configuration

You can set the `K8S_SERVICE_ACCOUNT_TOKEN` in your `.env` file:

```dotenv
K8S_SERVICE_ACCOUNT_TOKEN=your-service-account-token
```

> This service account token is used to authenticate with the Kubernetes API and should be a valid cluster-admin token.

## Usage

Details coming soon.

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

Please [open an issue](https://github.com/devoption/k8s-api/issues) for support.

## Contributing

Details coming soon.

## Security Vulnerabilities

If you discover a security vulnerability within this package, please send an e-mail to [security@devoption.io](mailto:security@devoption.io). All security vulnerabilities will be promptly addressed.
