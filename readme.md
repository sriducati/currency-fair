## Currency Fair Test

It is developed using laravel framework(PHP).please do import a sql file located at "public/currency.sql" before running this app in test environment.

## 
Note: If you get an error message:

Warning: require(C:\wamp\www\currency_fair\bootstrap/../vendor/autoload.php): failed to open stream: No such file or directory in C:\wamp\www\currency_fair\bootstrap\autoload.php on line 17

Fatal error: require(): Failed opening required 'C:\wamp\www\currency_fair\bootstrap/../vendor/autoload.php' (include_path='.;C:\php\pear') in C:\wamp\www\currency_fair\bootstrap\autoload.php on line 17

Please run below command.

composer update --no-dev --prefer-dist


