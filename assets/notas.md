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

# creacion de controlador  -- logicas de negocio
sail artisan make:controller TodosController

- csrf ----> cross site request forgery
usado para proteger las peticiones de los formularios
asigna un token a cada formulario, y lo valida al momento de enviar la peticion
se crea un campo oculto en el formulario con el token -- hidden