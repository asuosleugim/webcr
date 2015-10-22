# WEBCR - WEB Cash Register
---

**WEBCR** system is an open source product developed by [Miguel Jorge S. S. Sousa]
   
# STEPS TO FOLLOW 
Here are the steps to follow:
1. create a new database with name *webcr*
2. import DB file *webcr.sql* to newly created database
3. modify *connection.php* file accordingly
4. run the application and register yourself
5. login and use it

for any further assistance please contact me on my email migueljorgesousa@hotmail.com

I am good in web-based database application development. Let me know if I can help you resolving your problem.

## 1. Create a new database with name *webcr*
>These instructions are intended for creating a MySQL database on Linux via the command line.

First we’ll login to the MySQL server from the command line with the following command:
```sh
$ mysql -u root -p
```
In this case, I’ve specified the user *root* with the *-u* flag, and then used the *-p* flag so MySQL prompts for a password. Enter your current password to complete the login.

You should now be at a MySQL prompt that looks very similar to this:
```sh
mysql>
```
or in case of MariaDB:
```sh
MariaDB [(none)]>
```
To create a database with the name *webcr* type the following command:
```sh
CREATE DATABASE webcr;
```
## 2. Import DB file *webcr.sql* to newly created database
```sh
mysql> use webcr;
mysql> source webcr.sql;
```
## 3. Modify connection.php file accordingly
Using [vi]:
```sh
$ vi connection.php
```
Change accordingly:
```php
<?php
    $host="localhost" //change to your host
    $db_user="root"   //change if mysql user <> root
    $db_password=""   //put the password
    $db="webcr"       //change if database <> webcr
/*******************************************************
                 Don't change below                   
********************************************************/
$conn = mysqli_connect($host, $db_username, $db_password)
        or die ('Error Cannot Connect to MySQL');
        @mysqli_select_db($database) or die( "Unable to select database");
?>
```
# Version
0.0.2

# Tech

**WEBCR** uses several projects to work properly:

* [MySQL] - #1 database for Web-based applications
* [PHP] - widely-used Open Source general-purpose scripting language

And of course **WEBCR** itself is open source with a [public repository][source]
 on Sourceforge.

Readmes, how to use them in your own application can be found here:

* [WEBCR/README.md] [README]

# Development

Want to contribute? Great!
Email me: migueljorgesousa@hotmail.com

# Todos

 * Write Tests
 * Add Code Comments

# License

GPL 3.0 ---
**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does it's job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [Miguel Jorge S. S. Sousa]:<mailto:migueljorgesousa@hotmail.com>
   [vi]:<http://www.manpages.info/linux/vi.1.html>
   [MySQL]: <https://www.mysql.com/>
   [PHP]: <https://secure.php.net/>
   [README]: <http://sourceforge.net>
   [source]: <http://sourceforge.net>
