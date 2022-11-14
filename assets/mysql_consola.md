tony@DESKTOP-TONYMONTANA:/mnt/c/php/tareas-laravel$ sail mysql -u
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)
tony@DESKTOP-TONYMONTANA:/mnt/c/php/tareas-laravel$ sail mysql -u root -p
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 8
Server version: 8.0.31 MySQL Community Server - GPL

Copyright (c) 2000, 2022, Oracle and/or its affiliates.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| performance_schema |
| tareas_laravel     |
| testing            |
+--------------------+
4 rows in set (0.00 sec)

mysql> use tareas_laravel
Database changed
mysql> show tables;
+--------------------------+
| Tables_in_tareas_laravel |
+--------------------------+
| failed_jobs              |
| migrations               |
| password_resets          |
| personal_access_tokens   |
| todos                    |
| users                    |
+--------------------------+
6 rows in set (0.00 sec)

mysql> select * from todos;
Empty set (0.00 sec)

mysql> describe todos;
+------------+-----------------+------+-----+---------+----------------+
| Field      | Type            | Null | Key | Default | Extra          |
+------------+-----------------+------+-----+---------+----------------+
| id         | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| title      | varchar(255)    | NO   |     | NULL    |                |
| created_at | timestamp       | YES  |     | NULL    |                |
| updated_at | timestamp       | YES  |     | NULL    |                |
+------------+-----------------+------+-----+---------+----------------+
4 rows in set (0.00 sec)

mysql>