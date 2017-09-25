#SYMFONY 2.8 LANDING PAGE EXAMPLE
==================================

Symfony project created by company Dapda.com skills test.  

##INSTALLATION

1.- Clone de project

2.- Install composer dependencies

`composer install`

3.- Ensure you have a mysql run in your local

4.- Open parameters.yml file and copy

```
parameters:
    database_host: 127.0.0.1
    database_port: null
    database_name: landing //or your database name
    database_user: root
    database_password: null
    mailer_transport: gmail 
    mailer_user: landing.page.opel.comercial@gmail.com //or your gmail account
    mailer_password: Opel1234. //or your gmail account password
```

5.- If you decide to use a new database (landing), create it

`php app/console doctrine:database:create`

6.- Create tables

`php app/console doctrine:schema:update --force`

7.- Load fixtures

`app/console doctrine:fixtures:load --append`

8.- Run de php server

`php app/console server:run`

9.- On browser open the url

`http://localhost:3000/promocion`

10.- If you want to show the stored messages by console, you can use the command

`php app/console landing:page:messages`


