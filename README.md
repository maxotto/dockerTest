# Шпаргалка по проекту

## Docker

## Сервер

Работа с ДБ

- https://symfony.com/doc/current/doctrine/reverse_engineering.html

``php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity`` - импорт таблиц базы в Entity

``php bin/console make:entity --regenerate App`` - генерировать геттеры и сеттеры (долгий процесс)

``php bin/console make:entity --regenerate App\\Entity\\Fcpo`` - тоже самое, но для отдельной таблицы

*Примечание*: надо всегда иметь в виду, что Doctrine при выстраивании отношений между таблицами всегда сипользует
первичные ключи. Поэтому, то, как у меня сделана связь ZU-ONI, прямолинейно через Doctrine не взлетит - надо будет
эмулировать аналогичное поведение вручную.

### Сервер разработки

- https://symfony.com/doc/current/setup/symfony_server.html

Основные команды:

`symfony server:start` - стартует сервер

`symfony server:start -d` - стартует сервер в фоне

`symfony open:local` - открывает браузер на странице проекта

`symfony server:log` - просмотр логов

## Клиент

