# Laravel Package Installation Guide

This guide will walk you through the installation and setup process for integrating the package into your Laravel project.

## Requirements

- Laravel 8.x or higher
- PHP 7.4+ (or higher, depending on the package requirements)
- Composer

## Installation

To install the package, follow these steps:

### 1. Install via Composer

Run the following command in your Laravel project root directory to install the package:

```php
composer require ferdous-ahmed-khan/laravel-api-response
```

### 2. Open config/app.php

In the providers array, add the following line to register the service provider:

```php
'providers' => [
    // Other Service Providers...

    FerdousAhmedKhan\LaravelApiResponse\ResponseHelperServiceProvider::class,
],

```

In the aliases array, add the following line to create an alias for the ResponseHelper facade:

```php
'aliases' => [
    // Other Aliases...

    'ApiResponse' => FerdousAhmedKhan\LaravelApiResponse\ResponseHelperFacade::class,
],
```

### 3. Usage

Once the package is installed, you can start using its features. For example, to use the

```php

use ResponseHelper;


```

### `success()`

Generates a successful response with HTTP status `200`.

```php
return ApiResponse::success('Operation successful', $data);
```

### `deleted()`

Generates a response for successful deletions with HTTP status `200`

```php
return ApiResponse::deleted('Record deleted successfully', $data);
```

### `created()`

Generates a response for successful creation with HTTP status `201`

```php
return ApiResponse::created('Resource created successfully', $data);
```

### `badRequest()`

Generates a response for a bad request with HTTP status `400`.

```php
return ApiResponse::badRequest('Invalid request data', $errorDetails);
```

### `failed()`

Generates a generic failure response with HTTP status `400`.

```php
return ApiResponse::failed('Operation failed', $errorDetails);
```

### `unauthorized()`

Generates a response for forbidden access with HTTP status `403`.

```php
return ApiResponse::forbidden('Access is forbidden', $errorDetails);
```

### `forbidden()`

Generates a response for forbidden access with HTTP status `403`.

```php
return ApiResponse::forbidden('Access is forbidden', $errorDetails);
```

### `notFound()`

Generates a response for resources not found with HTTP status `404`.

```php
return ApiResponse::notFound('Resource not found', $errorDetails);
```

### `validationFailed()`

Generates a response for validation failure with HTTP status `422`.

```php
return ApiResponse::validationFailed('Validation failed', $validationErrors);

```

### `internalServerError()`

Generates a response for server errors with HTTP status `500`.

```php
return ApiResponse::internalServerError('An error occurred', $errorDetails);

```

### `custom()`

Generates a custom response with a specified HTTP status code.

```php
return ApiResponse::custom(true, 202, 'Request accepted', $data, null);

```

Each function returns a JsonResponse object with a consistent structure:

 ```json
{
    "status": true|false,
    "message": "Your message here",
    "data": { /*optional data */ },
    "errors": { /* optional error details*/ }
}
 ```
