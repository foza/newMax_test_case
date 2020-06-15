# Тестовое задание

Необходимо реализовать сервис с следующим функционалом с на языке PHP 7.0+
В базе данных MySQL/Postgresql должна быть таблица currency c колонками:

- id — первичный ключ
- name — название валюты
- rate — курс валюты к рублю

Должна быть консольная команда для обновления данных в таблице currency. 
Данные по курсам валют можно взять отсюда: 
http://www.cbr.ru/scripts/XML_daily.asp


Реализовать 2 REST API метода:
- GET /currencies — должен возвращать список курсов валют с возможность пагинации
- GET /currency/ — должен возвращать курс валюты для переданного id

API должно быть закрыто bearer авторизацией.

*Будет плюсом:
- Использования ООП и Паттернов
###=============================================
1. clone repository and run command _composer install_
2. set .env
3. run migration _php artisan migrate_
4. _php artisan passport:install_
5. _php artisan update:currency_ run command in console for getting data from api
6. php artisan serve

*php artisan key:generate

**Import NewMax.postman_collection.json to POSTMAN**
