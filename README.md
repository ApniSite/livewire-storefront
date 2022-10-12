# Livewire Storefront

![version](https://img.shields.io/badge/version-0.0.1-blue.svg)
![license](https://img.shields.io/badge/license-MIT-blue.svg)

Livewire E-commerce Storefront made with tailwindcss & alpinejs (TALL).

It goes very well with a variety of headless commerce packages for example lunar and more..

## How to install

1. Fresh install Laravel >= 8.0 and `cd` to your app.
2. Install this storefront via `composer require zabrdast/livewire-storefront`.
3. Laravel will automatically discover this package. No need to register the service provider.

## How to use

```php
Route::get('/store', function () {
    return view('zabrdast::layouts.app', ['slot' => '']);
});
```

## Screenshots

## Credits

- [tailwindcss](https://tailwindcss.com/)
- [alpinejs](https://alpinejs.dev/)
- [lunarphp](https://lunarphp.io/)

## License

This library is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
