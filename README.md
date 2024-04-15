INSTALACION DEL PROYECTO API_PERSONA_DNI_RUC
#==========================================

PASOS

1: Clonando el proyecto desde git

2: Permisos de escritura
    Después de instalar Laravel, tal vez debas configurar algunos permisos, Los directorios entre storage y la carpeta bootstrap/cache deben tener permisos de escritura por el servidor web.

    sudo chmod -R 755 storage

3: Instalando las dependencias
    
    composer install

4: Archivo de configuracion de Laravel

    creamos el archivo .env con los datos de configuracion necesarios para el mismo

    sin embargo no existe tal archivo, pero si existe un archivo .env.example, el cual se debe copiar y renombrar a .env

    cp .env.example .env

5: Creando un nuevo API key

    php artisan key:generate

6: Base de datos y migraciones
    
    CREAR LA BASE DE DATOS Y CONFIGURAR LOS DATOS DE CONEXION EN EL ARCHIVO .ENV

    DB_CONNECTION=mysql

    DB_HOST=localhost
    DB_DATABASE=tu_base_de_datos
    DB_USERNAME=root
    DB_PASSWORD=

    EJECUTAMOS LAS MIGRACIONES PARA LA CREACION DE LAS TABLAS

    php artisan migrate
    
    o

    php artisan migrate --seed

7: