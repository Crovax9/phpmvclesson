## Message-board

* .htaccess (redirect)
* 404.php  (errorpagetenplate)
* database.php(create database file)
* db.php (database connect file)
* idiorm.php (ORM)
* index.php (route)

## DB
CREATE Table messages

*    id INTEGER PRIMARY KEY AUTO_INCREMENT, 
*    title TEXT, 
*    content TEXT,
*    created_at timestamp
* 

## idiORM

### Getting data from objects

http://idiorm.readthedocs.io/en/latest/models.html

> <?php
> $person = ORM::for_table('person')->find_one(5);
>
> // The following two forms are equivalent
> $name = $person->get('name');
> $name = $person->name;