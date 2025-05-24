<?php
define('APP_NAME', 'PHP Admin Panel');

/* * * 
 *  Configuration file for the Admin Panel application.
 *  This file contains database connection settings and other configurations.
* * */
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DBHOST', 'localhost');
    define('DBNAME', 'admin_panel');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    define('DBDRIVER', 'mysql');
} else {
    define('DBHOST', 'localhost');
    define('DBNAME', 'admin_panel');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    define('DBDRIVER', 'mysql');
}