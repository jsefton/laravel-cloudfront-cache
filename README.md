# Laravel CloudFront Cache
Package to handle setting headers for CloudFront with specific URL and config settings

### Installation

You will need composer to install this package (get composer). Then run:

```bash
composer require jsefton/laravel-cloudfront-cache
```

#### Register Service Provider

Add the below into your `config/app.php` within `providers` array

```
JSefton\CloudFrontCache\CloudFrontCacheServiceProvider::class
```

After installation you will need to publish the config file. To do this run:

```bash
php artisan vendor:publish --tag=cloudfrontcache.config
```

This will create the file `config/cloudfront-cache.php` where you can configure the settings.

### Configuration