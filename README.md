# php_30_bdd_behat

Projeto do curso "PHP e Behavior Driven Development BDD com Behat" da Alura

## Links

- [PHP](https://www.php.net/)
- [PHPUnit](https://phpunit.de/index.html)

## Comandos

- composer dumpautoload
- composer install
- php -S localhost:8080
- php -S localhost:8080 -t public/
- php vendor/bin/phpunit --version
- php vendor/bin/phpunit tests
- php vendor/bin/phpunit --colors tests
- php vendor/bin/phpunit
- php vendor/bin/phpunit --testsuit=unit
- php vendor/bin/phpunit --testsuit=integration

- php bin/doctrine orm:schema-tool:create
- php bin/doctrine dbal:run-sql "INSERT INTO usuarios (email, senha) VALUES ('email@example.com', '\$argon2i\$v=19\$m=65536,t=4,p=1\$WHpBb1FzTDVpTmQubU55bA\$jtZiWSSbmw1Ru4tYEq1SzShrMu0ap2PjblRQRubNPgo');"

## Pacotes

composer require --dev phpunit/phpunit ^10
