## How to use
- Get a cup of coffee & some nicotines
- Create .env file
- Run command "composer i"
- Run command "npm i"
- Run command "npm run dev"
- uncomment file app\Providers\AppServiceProvider.php line 30 - 39

## Known Issues
- ### Table 'pmb.settings' doesn't exist
>
```
 Illuminate\Database\QueryException 

  SQLSTATE[42S02]: Base table or view not found: 1146 Table 'pmb.settings' doesn't exist (SQL: select `name`, `value` from `settings`)

  at vendor/laravel/framework/src/Illuminate/Database/Connection.php:692
    688▕         // If an exception occurs when attempting to run a query, we'll format the error
    689▕         // message to include the bindings with SQL, which will make this exception a
    690▕         // lot more helpful to the developer instead of just the database's errors.
    691▕         catch (Exception $e) {
  ➜ 692▕             throw new QueryException(
    693▕                 $query, $this->prepareBindings($bindings), $e
    694▕             );
    695▕         }
    696▕     }

  • A table was not found: You might have forgotten to run your migrations. You can run your migrations using `php artisan migrate`. 
    https://laravel.com/docs/master/migrations#running-migrations
```
> How to fix:
> - comment file app\Providers\AppServiceProvider.php line 30 - 39
> - run php artisan migrate
> - uncomment file app\Providers\AppServiceProvider.php line 30 - 39


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
