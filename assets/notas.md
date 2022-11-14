# creacion de modelo y migracion
sail artisan make:model Todo -m

- El nombre del modelo debe ser en singular
# se definen los campos de la tabla en la migracion

- acceder a la base de datos desde la consola
mysql -u root -p     -- sin docker
sail mysql -u root -p     -- con docker

# revisar las migraciones
sail artisan migrate:status

# crear migracion
sail artisan make:migration 

# si nos equivocamos en la migracion con un campo
sail artisan migrate:rollback        -- deshace la ultima migracion

