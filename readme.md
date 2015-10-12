# RESTful

Building RESTful API with minimal configuration in Laravel.


## Managing End-Points

- Routes go to `/api/v1/{model}`
- `ApiController` takes `$model` as the data end-point
- Checks against the configs in `api` for what end-point should go to what model
- Returns straight up JSON based on the model


## Look At

- [Fractal](http://fractal.thephpleague.com/)
    - [Laravel and Fractal](https://laracasts.com/discuss/channels/general-discussion/laravel-and-fractal)
    - [A Fractal service provider for Laravel](https://murze.be/2015/10/a-fractal-service-provider-for-laravel/)
- [Dingo API](https://github.com/dingo/api)


## License

Open-sourced software licensed under the [MIT license](http://wolfiezero.mit-license.org/)
