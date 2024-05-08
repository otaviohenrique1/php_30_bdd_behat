# php_30_bdd_behat

Projeto do curso "PHP e Behavior Driven Development BDD com Behat" da Alura

## Links

- [PHP](https://www.php.net/)

## Comandos

- composer dumpautoload
- composer install
- php -S localhost:8080
- php -S localhost:8080 -t public/
- vendor/bin/behat --init
- vendor/bin/behat
- vendor/bin/behat --append-snippets
- vendor/bin/behat --append-snippets --dry-run --snippets-for=FormacaoEmMemoria
- vendor/bin/behat -s unidade
- vendor/bin/behat -s integracao

- php bin/doctrine orm:schema-tool:create
- php bin/doctrine dbal:run-sql "INSERT INTO usuarios (email, senha) VALUES ('email@example.com', '\$argon2i\$v=19\$m=65536,t=4,p=1\$WHpBb1FzTDVpTmQubU55bA\$jtZiWSSbmw1Ru4tYEq1SzShrMu0ap2PjblRQRubNPgo');"
- php vendor/bin/doctrine orm:schema-tool:update -f

## Pacotes

composer require --dev behat/behat
